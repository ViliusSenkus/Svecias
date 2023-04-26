import {useEffect, useState} from 'react';
import axios from 'axios';

function App() {

const [data, setData] = useState([]);


useEffect(()=>{
  axios.get('http://localhost:8000/api/prekes/')
  .then(resp => setData(resp));
}, []);

  return (
    <div>
      Pagrindinis puslapis
      {data.map(d =><p>duomenys {d.pavadinimas} </p>)}
    </div>
  );
}

export default App;
