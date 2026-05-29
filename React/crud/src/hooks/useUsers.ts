import React, { useState, useEffect } from "react";
import { api } from "../services/api";
import { Users } from "../types/Users";

export const useUsers = () => {
    const [users, setUsers] = useState<Users[]>([])
    const [name, setName] = useState<string>("")
    const [email, setEmail] = useState<string>("")

    const [editUserId, setEditUserId] = useState<number | null>(null)

    const [loading, setLoading] = useState<boolean>(false)
    const [error, setError] = useState<string | null>(null)

    //GET
    const FormUsersFetch = async (e: React.FormEvent): Promise<void> => {
        e.preventDefault()

        if (!name || !email) {
            setError("Preencha todos os  campos!!")
            return
        }

        try {
            setLoading(true)

            const response = await api.get("/users")
            setUsers(response.data)
        } catch (e) {
            setError("Erro ao buscar usuários")
        } finally {
            setLoading(false)
        }
    }

    useEffect(()=>{
        
    },[])

    //POST e PUTH
    const postPuthUsers = async (): Promise<void> => {

        try {
            if (editUserId) {
                const response = await api.patch(`/users/${editUserId}`, {
                    name,
                    email
                })
                setUsers((prev) => prev.map((user) => user.id === editUserId ? response.data : user))
            } else {
                const response = await api.post("/users", {
                    name,
                    email
                })
                setUsers((prev) => [...prev, response.data])
            }
        } catch (e) {

        }
    }

    return {users, name, setName, email, setEmail}

}