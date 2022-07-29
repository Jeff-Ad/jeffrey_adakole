import React from "react";

import About from "./components/about/About";
import Contact from "./components/contact/Contact";
// import Exp from "./components/experience/Exp";
import Footer from "./components/footer/Footer";
import Header from "./components/header/Header";
import Nav from "./components/nav/Nav";
import PortfolioHead from "./components/portfolio/PortfolioHead";
import Page404 from "./components/Page404/Page404";
import { BrowserRouter, Routes, Route } from "react-router-dom";
// import Services from "./components/services/Services";
// import Test from "./components/testimonials/Test";
// import PortData from "./portData";
function App() {
  return (
    <div>
      <Header />
      <Nav />
      <About />
      <PortfolioHead />
      <Contact />
      {/* <Services /> */}
      {/* <Exp /> */}
      {/* <Test /> */}
      {/* <BrowserRouter>
        <Routes>
          <Route path="*" element={<Page404 />} />
        </Routes>
      </BrowserRouter> */}
      <Footer />
    </div>
  );
}

export default App;
