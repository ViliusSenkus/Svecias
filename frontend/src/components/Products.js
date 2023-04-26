function Products({data}){
    
    return (
        <div>
            <h3>{data.pavadinimas}</h3>
            <img src={data.foto_nuoroda} alt="piestukas"></img>
            <p>{data.apra\u0161ymas}</p>
            <p>{data.kiekis_sandely}</p>
        </div>
    )
}
export default Products;