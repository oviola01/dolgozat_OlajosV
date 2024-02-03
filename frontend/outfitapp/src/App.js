import "./App.css";
import { useState, useEffect } from "react";
import DataService from "./model/Dataservice.js";
import Sor from "./component/Sor.js";


const leiroList = ["Név", "Tulajdonság"];
const DS = new DataService();

function App() {
  let vegpont = "/uppers";
  const [objlista, setObjLista] = useState([{}]);
  //Reactnak meg kell adjam a useState-ben, hogy egy objektumot várjon
  //DS.getAxiosData(vegpont, fuggveny);
  //alt+shift+A ezzel írok megjegyzést

  useEffect(() => {
    DS.getAxiosData(vegpont, setObjLista);
  }, []);


  function kattintas(id){
    DS.deleteAxiosData(vegpont, id);
}

  return (
    <div className="App">
      <header className="App-header">
        <h1>React frontend</h1>
      </header>
      {/* <p>{objlista[0].name}</p> */}
      {/* mappelj végig a listán, és hozz létre egy új komponenst, amiben megjeleníted a listaelemeket  */}
      <div className="Tarolo">
        <table className="ListaTabla">
          <thead>
            <tr>
              {leiroList.map((elem, index) => {
                return <th key={index}>{elem}</th>;
              })}
            </tr>
          </thead>
          <tbody>
            {objlista.map((elem, index) => {
              return (
                <Sor key={index} elemId={elem.upper_id} megnevezes={elem.name} leiras={elem.description} kattintas={kattintas}/>
              );
            })}
          </tbody>
        </table>
        <div className="Urlap">

        </div>
      </div>
    </div>
  );
}

export default App;
