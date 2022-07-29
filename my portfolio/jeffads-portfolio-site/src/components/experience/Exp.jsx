import React from "react";
import "./exp.css";
import { BsPatchCheckFill } from "react-icons/bs";
function Exp() {
  return (
    <section id="exp">
      <h5>My Skills</h5>
      <h2>My Experience</h2>

      <div className="container experience__container">
        <div className="experience__frontend">
          <h3>frontend Dev</h3>
          <div className="experience__content">
            <article className="experience__details">
              <BsPatchCheckFill className="experience__details-icon" />
              <div>
                <h4>HTML</h4>
                <small className="text-light">Experienced</small>
              </div>
            </article>
            <article className="experience__details">
              <BsPatchCheckFill className="experience__details-icon" />
              <div>
                <h4>CSS</h4>
                <small className="text-light">Experienced</small>
              </div>
            </article>
            <article className="experience__details">
              <BsPatchCheckFill className="experience__details-icon" />
              <div>
                <h4>Bootstrap</h4>
                <small className="text-light">Experienced</small>
              </div>
            </article>
            <article className="experience__details">
              <BsPatchCheckFill className="experience__details-icon" />
              <div>
                <h4>JavaScript</h4>
                <small className="text-light">Experienced</small>
              </div>
            </article>
            <article className="experience__details">
              <BsPatchCheckFill className="experience__details-icon" />
              <div>
                <h4>React Js</h4>
                <small className="text-light">Experienced</small>
              </div>
            </article>
          </div>
          <h3>Backend Dev</h3>
          <div className="experience__content">
            <article className="experience__details">
              <BsPatchCheckFill className="experience__details-icon" />
              <div>
                <h4>PHP</h4>
                <small className="text-light">Intermediate</small>
              </div>
            </article>
            <article className="experience__details">
              <BsPatchCheckFill className="experience__details-icon" />
              <div>
                <h4>Mysql</h4>
                <small className="text-light">Intermediate</small>
              </div>
            </article>
          </div>
          <h3>Tools</h3>
          <div className="experience__content">
            <article className="experience__details">
              <BsPatchCheckFill className="experience__details-icon" />
              <div>
                <h4>FIGMA</h4>
                <small className="text-light">Intermediate</small>
              </div>
            </article>
            <article className="experience__details">
              <BsPatchCheckFill className="experience__details-icon" />
              <div>
                <h4>WordPress</h4>
                <small className="text-light">Experienced</small>
              </div>
            </article>
            <article className="experience__details">
              <BsPatchCheckFill className="experience__details-icon" />
              <div>
                <h4>GIT</h4>
                <small className="text-light">Experienced</small>
              </div>
            </article>
            <article className="experience__details">
              <BsPatchCheckFill className="experience__details-icon" />
              <div>
                <h4>Netlify</h4>
                <small className="text-light">Experienced</small>
              </div>
            </article>
            <article className="experience__details">
              <BsPatchCheckFill className="experience__details-icon" />
              <div>
                <h4>Her0ku</h4>
                <small className="text-light">Experienced</small>
              </div>
            </article>
          </div>
        </div>
        {/* END OF  FRONTEND */}
        <div className="soft__skills">
          <h3>SOFT SKILLS</h3>
          <div className="experience__content1">
            <article className="experience__details">
              <div>
                <BsPatchCheckFill className="experience__details-icon" />
                <h4>Critical Thinking & Problem Solving</h4>
                <small className="text-light">Experienced</small>
              </div>
            </article>
            <article className="experience__details">
              <div>
                <BsPatchCheckFill className="experience__details-icon" />
                <h4>Teamwork & Collaboration</h4>
                <small className="text-light">Experienced</small>
              </div>
            </article>
            <article className="experience__details">
              <div className="le">
                <BsPatchCheckFill className="experience__details-icon" />
                <h4>Leadership </h4>
                <small className="text-light">Experienced</small>
              </div>
            </article>
            <article className="experience__details">
              <div>
                <BsPatchCheckFill className="experience__details-icon" />
                <h4>Interpersonal Communication</h4>
                <small className="text-light">Experienced</small>
              </div>
            </article>
            <article className="experience__details">
              <div>
                <BsPatchCheckFill className="experience__details-icon" />
                <h4>Project Management</h4>
                <small className="text-light">Experienced</small>
              </div>
            </article>
          </div>
          <h3>Interest</h3>
          <div className="experience__content1">
            <article className="experience__details">
              <div>
                <BsPatchCheckFill className="experience__details-icon" />
                <h4>Sound Engineering</h4>
                <small className="text-light">Experienced in Live SRF</small>
              </div>
            </article>
            <article className="experience__details">
              <div>
                <BsPatchCheckFill className="experience__details-icon" />
                <h4>Playing Guiter</h4>
                <small className="text-light">Intermediate</small>
              </div>
            </article>
            <article className="experience__details">
              <div>
                <BsPatchCheckFill className="experience__details-icon" />
                <h4>Music (Singing and Writing)</h4>
                <small className="text-light">Basic</small>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
  );
}

export default Exp;
