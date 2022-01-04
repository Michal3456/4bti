
function App() {

  const submitData = (e) =>{
    e.preventDefault();
    document.querySelector('.result-cnt').innerHTML = '';
    let counter = 0;
    // const device = new URLSearchParams(document.querySelector('#device').value);

    const device = {name: document.querySelector('#device').value};

    fetch('http://localhost:80/react/api/main.php',{
      method: 'POST', 
      headers: {
        'Content-Type': 'aplication/json',
      },
      body: JSON.stringify(device)
    })
    .then(response => response.json())
    .then(response => {
      response.forEach(device => {
        let deviceInfo = document.createElement('h4');
        deviceInfo.innerHTML = `Device ID: ${device.id}, Device Name: ${device.name}, Location: ${device.location}, Device Owner: ${device.lname + device.fname}`;
        document.querySelector('.result-cnt').appendChild(deviceInfo);
        counter++;
      });
      let resultCounter = document.createElement('h2');
      resultCounter.innerHTML = `Results found: ${counter}`;
      document.querySelector('.result-cnt').appendChild(resultCounter);
    });
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
      <form id='dataForm' onSubmit={submitData} >
        <input type='text' placeholder='Input your device name here.' id='device' name="device"/>
        <button type='submit'>Submit</button>
      </form>
      <main>
        <h2>Device Information:</h2>
        <div className="result-cnt">
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
