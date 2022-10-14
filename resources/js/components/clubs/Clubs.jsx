import Club from "./Club";
import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class CLubs extends Component{

  constructor(props){
    super(props);

    this.state={
      clubs: [],
    }
  }

  getClubs = () => {

  }

  render(){
  return (
    <div>
    <h1 className=" text-2xl text-lg font-bold text-gray-700 px-40 py-5 ">
        Clubs
      </h1>
    <div className="px-40 grid grid-cols-3 gap-1 content-start">
      <div id='club'>

      </div>
      <Club
        image={require("../../images/manit_logo.jpg")}
        title="Maulana Azad National Institute of Technology, Bhopal"
        details="Maulana Azad National Institute of Technology Bhopal is a public technical university located in Bhopal, Madhya Pradesh, India."
      />
      <Club
        image={require("../../images/manit_logo.jpg")}
        title="Maulana Azad National Institute of Technology, Bhopal"
        details="Maulana Azad National Institute of Technology Bhopal is a public technical university located in Bhopal, Madhya Pradesh, India."
      />
      <Club
        image={require("../../images/football.jpg")}
        title="Maulana Azad National Institute of Technology, Bhopal"
        details="Maulana Azad National Institute of Technology Bhopal is a public technical university located in Bhopal, Madhya Pradesh, India."
      />
    </div>
    </div>
    
  );
}
}

export default Clubs;
if (document.getElementById('clubs')) {
  ReactDOM.render(<Clubs />, document.getElementById('clubs'));
}