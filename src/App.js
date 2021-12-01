
function App() {

  const submitData = (e) =>{
    e.preventDefault();
    //Data fetching from PHP api using a GET method will take place here 
  }

  return (
    <form id='dataForm' onSubmit={submitData}>
        <input type='text' placeholder='Input your device name here.'/>
        <button type='submit'>Submit</button>
    </form>
  );
}

export default App;
