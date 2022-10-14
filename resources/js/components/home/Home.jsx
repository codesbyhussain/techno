import Clubs from "../clubs/Clubs";
import Events from "../evnts/Events";
import React, { Component } from 'react';
import ReactDOM from 'react-dom';

function Home() {
  return (
    <div>
      <div id='clubs'>
        <Clubs />
      </div>
      <div id='events'>
      </div>
      Diaspora
    </div>
  );
}

export default Home;

if (document.getElementById('home')) {
  ReactDOM.render(<Home />, document.getElementById('home'));
}