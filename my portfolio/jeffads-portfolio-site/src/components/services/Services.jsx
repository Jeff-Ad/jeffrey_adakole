import React from "react";
import { Link } from "react-router-dom";
import { BrowserRouter } from "react-router-dom";
import "./services.css";

function Services() {
  const str = "<code />";
  return (
    <section id="services">
      <article className="container contain">
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
              <Link to="{info.preV}" className="btn btn-primary">
                preview
              </Link>
              <Link to="{info.code}" className="btn">
                {str}
              </Link>
            </BrowserRouter>
          </div>
        </div>
      </article>
    </section>
  );
}

export default Services;
