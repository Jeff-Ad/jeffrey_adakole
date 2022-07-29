import React from "react";
import PortData from "../../portData";
import Portfolio from "./Portfolio";
import { useInView } from "react-intersection-observer";

function PortfolioHead() {
  const { ref: myRef, inView: myElvisi } = useInView();
  const dataPort = PortData.map((data) => {
    return <Portfolio key={data.id} info={data} />;
  });
  return (
    <section id="portfolio">
      <div ref={myRef} className={`sec ${myElvisi ? "show" : ""}`}>
        <h5>Few Things I've Built</h5>
        <h2>Portfolio</h2>
        <div className="container portfolio__container">{dataPort}</div>
      </div>
    </section>
  );
}

export default PortfolioHead;
