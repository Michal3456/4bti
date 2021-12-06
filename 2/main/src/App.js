
function App() {

  const submitData = (e) =>{
    e.preventDefault();
    //Data fetching from PHP api using a GET method will take place here 
  }

  return (
    <>
      <nav>
        <h1>GPS Device Location</h1>
        <div className="link-cnt">
          <a href="#">Database</a>
          <a href="#">Locate Device</a>
          <a href="#">About Me</a>
          <a href="#">Help</a>
        </div>
      </nav>
      <form id='dataForm' onSubmit={submitData}>
        <input type='text' placeholder='Input your device name here.'/>
        <button type='submit'>Submit</button>
      </form>
      <main>
        <h2>Device Information:</h2>
        <div className="result-cnt">
          <h1>Data will be displayed here</h1>
        </div>
        <div className="steps-cnt">
          <div className="circle active">
            <span>1</span>
            <p>Read data form.</p>
          </div>
          <div className="circle">
            <span>2</span>
            <p>Search for device information in database</p>
          </div>
          <div className="circle">
            <span>3</span>
            <p>Output the result</p>
          </div>
        </div>
      </main>
    </>
  );
}

export default App;
