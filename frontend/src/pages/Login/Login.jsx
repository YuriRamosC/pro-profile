import React, { Component, useState } from 'react';
import { TextField, Button, Switch, FormControlLabel,Container, Typography } from "@material-ui/core";
export default function Login() {
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");
    return (
        <Container component="article" maxWidth="sm">
            <Typography variant="h3" component="h1" align="center" color='primary' >Login</Typography>
            <form
                onSubmit={(event) => {
                    event.preventDefault();
                    console.log(email, password);
                }}>
                <TextField
                    onChange={(event) => {
                        setEmail(event.target.value)
                    }}
                    id='email' label='Email' margin='normal' fullWidth />
                <TextField
                    onChange={(event) => {
                        setPassword(event.target.value)
                    }}
                    id='password' label='Senha' type='password' margin='normal' fullWidth />
                <Button type="submit" variant="contained" color="primary">
                    Cadastrar
                </Button>
            </form>
        </Container>
    );
}