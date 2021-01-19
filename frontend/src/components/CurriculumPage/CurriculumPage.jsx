import React, { useState } from "react";
import { TextField, Button, Switch, FormControlLabel, Typography, Avatar, Container, Grid } from "@material-ui/core";
import curriculumPrototype from '../../api/fakedata/curriculumPrototype';

function FormularioCadastro() {
    const [name, setName] = useState(curriculumPrototype.name);
    const [email, setEmail] = useState(curriculumPrototype.email);
    return (
        <Container component="article" maxWidth="md">
            <Grid
                container
                direction="column"
                justify="flex-start"
                alignItems="center"
            >
                <div><Avatar src='https://media-exp1.licdn.com/dms/image/C4D03AQHKNcQeLUjQGg/profile-displayphoto-shrink_200_200/0/1600951220844?e=1616630400&v=beta&t=M5Ge6AZ24gaP1F8MGLSeoL3bDHhdt6LRgQCiPwOUbSg' />
                <Typography variant="h6" align="center" color='primary' >{name}</Typography></div>
                <Typography variant="h6" component="h4" align="center" color='primary' >{email}</Typography>
            </Grid>
        </Container>
    );
}

export default FormularioCadastro;
