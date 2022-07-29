import React from "react";
// import Rse from "../images/cv.pdf";
function Resume() {
  return (
    <div className="resume">
      <a href="#contact" className="btn btn-primary ani">
        Contact me
      </a>
      <a href={process.env.PUBLIC_URL + "images/cv.pdf"} className="btn">
        Download Resumé
      </a>
    </div>
  );
}

export default Resume;
