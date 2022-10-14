import Clubs from "./clubs/Clubs";
import Events from "./evnts/Events";
import Footer from "./footer/Footer";
import Home from "./home/Home";
import Navbar from "./navbar/Navbar";
import React from "react";
import { BrowserRouter, Routes, Route } from "react-router-dom";
import AboutUs from "./about/AboutUs";
import Explore from "./clubs/Explore";
import Register from "./clubs/Register";
import Signup from "./signup/Signup";
import Login from "./login/Login";

function App (){
  return (
    // <div className="flex flex-col h-screen justify-between">
    //   <BrowserRouter>
    //     <Navbar />
    //     <Routes>
    //       <Route path="/" exact element={<Home />} />
    //       <Route path="/signup" exact element={<Signup />} />
    //       <Route path="/login" exact element={<Login />} />
    //       <Route path="/clubs" exact element={<Clubs />} />
    //       <Route path="/events" exact element={<Events />} />
    //       <Route path="/about" exact element={<AboutUs />} />
    //       <Route path="/clubs/explore" exact element={<Explore />} />
    //       <Route path="/clubs/register" exact element={<Register />} />
    //     </Routes>
    //     <Footer />
    //   </BrowserRouter>
    // </div>
    <div> Hello </div>
  );
};

ReactDOM.render(<Home />, document.getElementById('app'));
export default App;


