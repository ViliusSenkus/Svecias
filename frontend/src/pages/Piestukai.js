import { useState, useEffect } from "react";
import Products from '../components/Products';
import axios from "axios";


function Piestukai() {

    const [data, setData] = useState([]);

    useEffect( ()=> {
        axios.get('http://localhost:8000/api/prekes/')
        .then(resp => setData(resp.data))
    }
    ,[])

    if (!data) return null;
    
    return(
        <div className="row">
            {data.map(item => 
            <div className="col-4" key={item.id}>
                <Products data={item} />
            </div>
            )}
        </div>
    )
}


export default Piestukai