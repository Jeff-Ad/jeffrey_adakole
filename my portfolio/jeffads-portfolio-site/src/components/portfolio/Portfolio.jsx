import React from "react";
import { Link } from "react-router-dom";
import { BrowserRouter } from "react-router-dom";
import "./portfolio.css";

function Portfolio({ info }) {
  const str = "<code />";

  return (
    <article className="portfolio__item">
      <div className="portfolio__item-image">
        <img className="" src={info.image} alt={info.title} />
      </div>
      <h3>{info.title}</h3>
      <h5>{info.para}</h5>
      <div className="portfolio__item-cta">
        <BrowserRouter>
          <a
            href={info.preV}
            target="_blank"
            rel="noreferrer"
            className="btn btn-primary"
          >
            preview
          </a>
          <a href={info.code} target="_blank" rel="noreferrer" className="btn">
            {str}
          </a>
        </BrowserRouter>
      </div>
    </article>
  );
}

export default Portfolio;
