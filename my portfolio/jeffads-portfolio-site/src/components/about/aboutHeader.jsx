import React from "react";
import { HashLink as Link } from "react-router-hash-link";

import { BrowserRouter } from "react-router-dom";
import "./about.css";
function aboutHeader() {
  return (
    <div className="container contain">
      <div className="left">
        <div className="imgh"></div>
        <div className="im">
          <img src={process.env.PUBLIC_URL + "images/jeff.jpg"} alt="jee" />
        </div>
      </div>
      <div className="right">
        <h3>Hellooo,</h3>
        <p>
          I'm JEFFREY ADAKOLE, a graduate of Information and Media Technology
          (B.Tech) from the Federal University of Technology Minna who is
          specialized in building, developing and occasionally designing web
          apps
        </p>
        <div className="portfolio__item-cta">
          <BrowserRouter>
            <Link to="#contact" className="btn btn-primary">
              Get in Touch
            </Link>
          </BrowserRouter>
        </div>
      </div>
    </div>
  );
}

export default aboutHeader;
