import React, { useState } from "react";
import { TextField, Paper, AccordionSummary, AccordionDetails, Button, ButtonBase, Typography, Grid, GridItem, makeStyles, Accordion } from "@material-ui/core";
import { Autocomplete } from '@material-ui/lab';
import { DeleteForever } from '@material-ui/icons';
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
    { id: 1, title: 'C' },
    { id: 2, title: 'Node.js' },
    { id: 3, title: 'React' },
    { id: 4, title: 'Javascript' },
    { id: 5, title: 'Java' },
    { id: 1, title: 'Laravel' },
    { id: 1, title: 'PHP' },
    { id: 1, title: 'HTML' },
    { id: 1, title: 'CSS' },
];

function FormularioCadastro() {
    const [name, setName] = useState(curriculumPrototype.name);
    const [email, setEmail] = useState(curriculumPrototype.email);
    const [newKnowledge, setNewKnowledge] = useState({ id:null, title: '', yearsOfExperience: 0 });
    const [knowledges, setKnowledges] = useState(curriculumPrototype.knowledges);
    const classes = useStyles();
    return (
        < div className={classes.root} >
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
                            <Typography color='primary' variant='h6'>Conhecimentos:
                                    <Grid container>
                                    {knowledges.map((item) => (
                                        <Button className={classes.margin}
                                            onClick={() => setKnowledges(knowledges.filter(list => list.id !== item.id))}
                                            variant='contained' color='secondary' title={item.id}>
                                            {item.title} ({item.yearsOfExperience})<DeleteForever />
                                        </Button>
                                    ))}
                                </Grid>
                            </Typography>
                        </AccordionSummary>
                        <AccordionDetails>
                            <Grid item xs={12}>
                                <Grid container spacing={3}>
                                    <Grid item xs={5}>
                                        <Autocomplete
                                            id='knowledges-opt'
                                            options={knowledgesArray}
                                            getOptionLabel={(option) => option.title}
                                            onChange={(event, newValue) => {
                                                setNewKnowledge({...newKnowledge, id: newValue.id, title: newValue.title});
                                            }}
                                            onInputChange={(event, newValue) => {
                                                setNewKnowledge({...newKnowledge, id: newValue.id, title: newValue.title});
                                            }}
                                            renderInput={(params) => <TextField {...params} label='Conhecimentos' variant='outlined'
                                                fullWidth />}
                                        />
                                    </Grid>
                                    <Grid item>
                                        <TextField id='knowledge-time' label='Experiência(em anos)' type='number'
                                            onChange={(event) => {
                                                setNewKnowledge({...newKnowledge, yearsOfExperience:event.target.value});
                                                }}
                                            variant='outlined' fullWidth />
                                    </Grid>
                                    <Grid item>
                                        <Button variant="contained" color="primary" size='medium' className={classes.margin}
                                            onClick={() => {
                                                setKnowledges(knowledges => [...knowledges, newKnowledge]);
                                                setNewKnowledge('');
                                                console.log(knowledges);
                                            }}> Adicionar</Button>
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
