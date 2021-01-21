import React, { useState } from "react";
import { TextField, Paper, AccordionSummary, AccordionDetails, Button, ButtonBase, Typography, Grid, GridItem, makeStyles, Accordion } from "@material-ui/core";
import { Autocomplete } from '@material-ui/lab';
import curriculumPrototype from '../../api/fakedata/curriculumPrototype';

const useStyles = makeStyles((theme) => ({
    root: {
        flexGrow: 1,
    },
    paper: {
        padding: theme.spacing(2),
        margin: 'auto',
        maxWidth: 700,
    },
    image: {
        width: 128,
        height: 128,
    },
    img: {
        margin: 'auto',
        display: 'block',
        maxWidth: '100%',
        maxHeight: '100%',
    },
    fullWidthCustom: {
        width: '100%',
        padding: 2,
    },
    margin: {
        margin: theme.spacing(1),
    }
}));
const knowledgesArray = [
    { title: 'C' },
    { title: 'Node.js' },
    { title: 'React' },
    { title: 'Javascript' },
    { title: 'Java' },
    { title: 'Laravel' },
    { title: 'PHP' },
    { title: 'HTML' },
    { title: 'CSS' },
];
function FormularioCadastro() {
    const [name, setName] = useState(curriculumPrototype.name);
    const [email, setEmail] = useState(curriculumPrototype.email);
    const [knowledges, setKnowledges] = useState(curriculumPrototype.knowledges);
    const classes = useStyles();
    console.log(knowledges);
    return (
        <div className={classes.root}>
            <Paper className={classes.paper}>
                <Grid container spacing={2}>
                    <Grid item>
                        <ButtonBase className={classes.image}>
                            <img className={classes.img} alt="complex" src='https://media-exp1.licdn.com/dms/image/C4D03AQHKNcQeLUjQGg/profile-displayphoto-shrink_200_200/0/1600951220844?e=1616630400&v=beta&t=M5Ge6AZ24gaP1F8MGLSeoL3bDHhdt6LRgQCiPwOUbSg' />
                        </ButtonBase>
                    </Grid>
                    <Grid item xs={12} sm direction='column' spacing={2}>
                        <Grid item>
                            <Typography variant="h6" align="center" color='primary' >{name}</Typography>
                        </Grid>
                        <Grid item>
                            <Typography variant="h6" component="h4" align="center" color='primary' >{email}</Typography>
                        </Grid>
                    </Grid>
                </Grid>
                <Grid container spacing={3}>
                    <Accordion className={classes.fullWidthCustom}>
                        <AccordionSummary aria-controls='knowledges-content' id='knowledgesHeader'>
                            <Typography>Conhecimentos: {knowledges}</Typography>
                        </AccordionSummary>
                        <AccordionDetails>
                            <Grid item xs={12}>
                                <Grid container spacing={3}>
                                    <Grid item xs={5}>
                                        <Autocomplete
                                            id='knowledges-opt'
                                            options={knowledgesArray}
                                            getOptionLabel={(option) => option.title}
                                            renderInput={(params) => <TextField {...params} label='Conhecimentos' variant='outlined' fullWidth/>}
                                        />
                                    </Grid>
                                    <Grid item>
                                        <TextField id='knowledge-time' label='Experiência(em anos)' type='number' variant='outlined' fullWidth />
                                    </Grid>
                                    <Grid item>
                                        <Button variant="contained" color="primary" size='large' className={classes.margin}> Adicionar</Button>
                                    </Grid>
                                </Grid>
                            </Grid>
                        </AccordionDetails>
                    </Accordion>
                    {/*Cursos, precisa-se de um botão aqui para mostrar essas opções */}
                    <Grid item xs={12}>
                        <TextField id='courses' label='Cursos' variant='outlined' spacing={2} fullWidth />
                    </Grid>
                    <Grid item>
                        <Grid container direction='row' spacing={3}>
                            <Grid item>
                                <TextField id='courses-duration' label='Duração' type='number' variant='outlined' fullWidth />
                            </Grid>
                            <Grid item>
                                <TextField id='courses-finishedAt' label='Data de Conclusão' variant='outlined' type='date' InputLabelProps={{ shrink: true }} fullWidth />
                            </Grid>
                            <Grid item>
                                <TextField id='couses-emissor' label='Emissor' variant='outlined' fullWidth />
                            </Grid>
                        </Grid>
                    </Grid>
                </Grid>
            </Paper>
        </div >
    );
}

export default FormularioCadastro;
