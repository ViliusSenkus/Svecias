import {useEffect, useState} from 'react';
import axios from 'axios';

//React router dom
import { BrowserRouter, Routes, Route } from 'react-router-dom';

//Layoutas
// import MainLayout from './layouts/MainLayout';

//Kontekstas
import MainContext from './context/MainContext';
import Piestukai from './pages/Piestukai';

function App() {

  const [data, setData] = useState([]);

  useEffect(() => {
    fetch('http://localhost:8000/api/prekes/')
    .then(resp => resp.json())
    .then(resp => setData(resp))
  },[])

  return (
    <div className="container">
      <div className="row">
        {
        data.map(value => 
          <div key={value.id}>{value.id}</div>
        )
        }
        <Piestukai />
      </div>
    </div>
  );
}

export default App;
