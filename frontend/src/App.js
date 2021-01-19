import logo from './logo.svg';
import './App.css';
import Login from './pages/Login';
import 'fontsource-roboto';
import { Container, Typography, TextField, CssBaseline } from "@material-ui/core"
import CurriculumPage from './components/CurriculumPage';

function App() {
  return (
    <section>
        <Login />
        <CssBaseline />
        <CurriculumPage/>
    </section>
  );
}

export default App;
