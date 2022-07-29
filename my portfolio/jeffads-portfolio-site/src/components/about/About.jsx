import React from "react";
import "./about.css";
import AboutHeader from "./aboutHeader";
import { GiBookshelf } from "react-icons/gi";
import { BrowserRouter } from "react-router-dom";
import { BsPatchCheckFill } from "react-icons/bs";
import { useInView } from "react-intersection-observer";
function About() {
  const { ref: myRef, inView: myElvisi } = useInView();
  // const [miElvisi, setMiElvisi] = React.useState(false);
  // const myRef = React.useRef();
  // console.log("miElvisi", miElvisi);
  // React.useEffect(() => {
  //   const observer = new IntersectionObserver((entries) => {
  //     const entry = entries[0];
  //     setMiElvisi(entry.isIntersecting);
  //   });
  //   observer.observe(myRef.current);
  // }, []);
  return (
    <section id="about">
      <div ref={myRef} className={`sec ${myElvisi ? "show" : ""}`}>
        <h5>Get To Know More</h5>
        <h2>About me</h2>
        {/* <article className="">
          </article> */}
        <AboutHeader />
        <div className="container about__container">
          {/* <div className="about-image-content">
          <div className="about__mee">
            <div className="about__me-image">
              <img src={process.env.PUBLIC_URL + "images/jeff.jpg"} alt="" />
            </div>
          </div>
          <p>
            Hello, I'm JEFFREY ADAKOLE, a graduate of Information and Media
            Technology (B.Tech) from the Federal University of Technology Minna
            who is specialized in building, developing and occasionally
            designing web apps
          </p>
        </div> */}
          <div className="about__content">
            <div className="about__cards">
              <article className="about__card">
                <div className="about__icon-head">
                  <GiBookshelf className="about__icon" />
                  <h3>Technologies And Tools I've Worked With </h3>
                </div>
                <h3>Languages & Library</h3>
                <div className="lang">
                  <div className="about__icon-heads">
                    <BsPatchCheckFill className="about__skills-icon" />
                    <small>HTML</small>
                  </div>
                  <div className="about__icon-heads">
                    <BsPatchCheckFill className="about__skills-icon" />
                    <small>CSS</small>
                  </div>
                  <div className="about__icon-heads">
                    <BsPatchCheckFill className="about__skills-icon" />
                    <small>Bootstrap</small>
                  </div>
                  <div className="about__icon-heads">
                    <BsPatchCheckFill className="about__skills-icon" />
                    <small>JavaScript</small>
                  </div>
                  <div className="about__icon-heads">
                    <BsPatchCheckFill className="about__skills-icon" />
                    <small>React</small>
                  </div>
                  <div className="about__icon-heads">
                    <BsPatchCheckFill className="about__skills-icon" />
                    <small>PHP</small>
                  </div>
                  <div className="about__icon-heads">
                    <BsPatchCheckFill className="about__skills-icon" />
                    <small>Mysql</small>
                  </div>
                </div>

                <h3>Tools & Platforms</h3>
                <div className="tools">
                  <div className="about__icon-heads">
                    <BsPatchCheckFill className="about__skills-icon" />
                    <small>Git</small>
                  </div>
                  <div className="about__icon-heads">
                    <BsPatchCheckFill className="about__skills-icon" />
                    <small>Figma</small>
                  </div>
                  <div className="about__icon-heads">
                    <BsPatchCheckFill className="about__skills-icon" />
                    <small>Netlify</small>
                  </div>
                  <div className="about__icon-heads">
                    <BsPatchCheckFill className="about__skills-icon" />
                    <small>Heroku</small>
                  </div>
                  <div className="about__icon-heads">
                    <BsPatchCheckFill className="about__skills-icon" />
                    <small>WordPress</small>
                  </div>
                </div>
              </article>
              <article className="about__card">
                <div className="about__icon-head">
                  <GiBookshelf className="about__icon" />
                  <h3>Soft Skills </h3>
                </div>
                <div className="soft">
                  <div className="about__icon-soft">
                    <BsPatchCheckFill className="about__skills-icon" />
                    <small>Critical Thinking & Problem Solving</small>
                  </div>
                  <div className="about__icon-soft">
                    <BsPatchCheckFill className="about__skills-icon" />
                    <small>Teamwork & Collaboration</small>
                  </div>
                  <div className="about__icon-soft">
                    <BsPatchCheckFill className="about__skills-icon" />
                    <small>Leadership</small>
                  </div>
                  <div className="about__icon-soft">
                    <BsPatchCheckFill className="about__skills-icon" />
                    <small>Interpersonal Communication</small>
                  </div>
                  <div className="about__icon-soft">
                    <BsPatchCheckFill className="about__skills-icon" />
                    <small>Project Management</small>
                  </div>
                </div>
              </article>
              <article className="about__card">
                <div className="about__icon-head">
                  <GiBookshelf className="about__icon" />
                  <h3>Interests </h3>
                </div>
                <div className="about__icon-interest">
                  <BsPatchCheckFill className="about__skills-icon" />
                  <small>Sound Engineering (SRS)</small>
                </div>
                <div className="about__icon-interest">
                  <BsPatchCheckFill className="about__skills-icon" />
                  <small>Playing Guitar</small>
                </div>
                <div className="about__icon-interest">
                  <BsPatchCheckFill className="about__skills-icon" />
                  <small>Music (Singing & Writing) </small>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}

export default About;
