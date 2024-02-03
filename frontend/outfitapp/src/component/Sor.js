export default function Sor(props) {
    function kattintas(){
        console.log(props.elemId);
        props.kattintas(props.elemId);
    }
  return (
    <tr className="Sor" onClick={kattintas}>
      <td>{props.megnevezes}</td>
      <td>{props.leiras}</td>
      <td><button>Törlés</button></td>
    </tr>
  );
}
