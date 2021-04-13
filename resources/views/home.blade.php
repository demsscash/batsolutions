@extends('layouts.master_home')

  

@section('home_content')
<section >


<style>
          
.fnc {
  /* you can add color names and their values here
  and then simply add classes like .m--blend-$colorName to .fnc-slide 
  to apply specific color for mask blend mode */
}
.fnc-slider {
  overflow: hidden;
  box-sizing: border-box;
  position: relative;
  height: 100vh;
}
.fnc-slider *, .fnc-slider *:before, .fnc-slider *:after {
  box-sizing: border-box;
}
.fnc-slider__slides {
  position: relative;
  height: 95%;
  transition: -webkit-transform 1s 0.6666666667s;
  transition: transform 1s 0.6666666667s;
  transition: transform 1s 0.6666666667s, -webkit-transform 1s 0.6666666667s;
}
.fnc-slider .m--blend-dark .fnc-slide__inner {
  background-color: #8a8a8a;
}
.fnc-slider .m--blend-dark .fnc-slide__mask-inner {
  background-color: #575757;
}
.fnc-slider .m--navbg-dark {
  background-color: #575757;
}
.fnc-slider .m--blend-green .fnc-slide__inner {
  background-color: #6d9b98;
}
.fnc-slider .m--blend-green .fnc-slide__mask-inner {
  background-color: #42605E;
}
.fnc-slider .m--navbg-green {
  background-color: #42605E;
}
.fnc-slider .m--blend-red .fnc-slide__inner {
  background-color: #ea2329;
}
.fnc-slider .m--blend-red .fnc-slide__mask-inner {
  background-color: #990e13;
}
.fnc-slider .m--navbg-red {
  background-color: #990e13;
}
.fnc-slider .m--blend-blue .fnc-slide__inner {
  background-color: #59aecb;
}
.fnc-slider .m--blend-blue .fnc-slide__mask-inner {
  background-color: #2D7791;
}
.fnc-slider .m--navbg-blue {
  background-color: #2D7791;
}
.fnc-slide {
  overflow: hidden;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}
.fnc-slide.m--before-sliding {
  z-index: 2 !important;
  -webkit-transform: translate3d(100%, 0, 0);
          transform: translate3d(100%, 0, 0);
}
.fnc-slide.m--active-slide {
  z-index: 1;
  transition: -webkit-transform 1s 0.6666666667s ease-in-out;
  transition: transform 1s 0.6666666667s ease-in-out;
  transition: transform 1s 0.6666666667s ease-in-out, -webkit-transform 1s 0.6666666667s ease-in-out;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}
.fnc-slide__inner {
  position: relative;
  height: 100%;
  background-size: cover;
  background-position: center top;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}
.m--global-blending-active .fnc-slide__inner, .m--blend-bg-active .fnc-slide__inner {
  background-blend-mode: luminosity;
}
.m--before-sliding .fnc-slide__inner {
  -webkit-transform: translate3d(-100%, 0, 0);
          transform: translate3d(-100%, 0, 0);
}
.m--active-slide .fnc-slide__inner {
  transition: -webkit-transform 1s 0.6666666667s ease-in-out;
  transition: transform 1s 0.6666666667s ease-in-out;
  transition: transform 1s 0.6666666667s ease-in-out, -webkit-transform 1s 0.6666666667s ease-in-out;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}
.fnc-slide__mask {
  overflow: hidden;
  z-index: 1;
  position: absolute;
  right: 60%;
  top: 15%;
  width: 50.25vh;
  height: 67vh;
  margin-right: -90px;
  -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%, 0 0, 6vh 0, 6vh 61vh, 44vh 61vh, 44vh 6vh, 6vh 6vh);
          clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%, 0 0, 6vh 0, 6vh 61vh, 44vh 61vh, 44vh 6vh, 6vh 6vh);
  -webkit-transform-origin: 50% 0;
          transform-origin: 50% 0;
  transition-timing-function: ease-in-out;
}
.m--before-sliding .fnc-slide__mask {
  -webkit-transform: rotate(-10deg) translate3d(200px, 0, 0);
          transform: rotate(-10deg) translate3d(200px, 0, 0);
  opacity: 0;
}
.m--active-slide .fnc-slide__mask {
  transition: opacity 0.35s 1.2222222222s, -webkit-transform 0.7s 1.2222222222s;
  transition: transform 0.7s 1.2222222222s, opacity 0.35s 1.2222222222s;
  transition: transform 0.7s 1.2222222222s, opacity 0.35s 1.2222222222s, -webkit-transform 0.7s 1.2222222222s;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
  opacity: 1;
}
.m--previous-slide .fnc-slide__mask {
  transition: opacity 0.35s 0.6833333333s, -webkit-transform 0.7s 0.3333333333s;
  transition: transform 0.7s 0.3333333333s, opacity 0.35s 0.6833333333s;
  transition: transform 0.7s 0.3333333333s, opacity 0.35s 0.6833333333s, -webkit-transform 0.7s 0.3333333333s;
  -webkit-transform: rotate(10deg) translate3d(-200px, 0, 0);
          transform: rotate(10deg) translate3d(-200px, 0, 0);
  opacity: 0;
}
.fnc-slide__mask-inner {
  z-index: -1;
  position: absolute;
  left: 50%;
  top: 50%;
  width: 100vw;
  height: 100vh;
  margin-left: -50vw;
  margin-top: -50vh;
  background-size: cover;
  background-position: center center;
  background-blend-mode: luminosity;
  -webkit-transform-origin: 50% 16.5vh;
          transform-origin: 50% 16.5vh;
  transition-timing-function: ease-in-out;
}
.m--before-sliding .fnc-slide__mask-inner {
  -webkit-transform: translateY(0) rotate(10deg) translateX(-200px) translateZ(0);
          transform: translateY(0) rotate(10deg) translateX(-200px) translateZ(0);
}
.m--active-slide .fnc-slide__mask-inner {
  transition: -webkit-transform 0.7s 1.2222222222s;
  transition: transform 0.7s 1.2222222222s;
  transition: transform 0.7s 1.2222222222s, -webkit-transform 0.7s 1.2222222222s;
  -webkit-transform: translateX(0);
          transform: translateX(0);
}
.m--previous-slide .fnc-slide__mask-inner {
  transition: -webkit-transform 0.7s 0.3333333333s;
  transition: transform 0.7s 0.3333333333s;
  transition: transform 0.7s 0.3333333333s, -webkit-transform 0.7s 0.3333333333s;
  -webkit-transform: translateY(0) rotate(-10deg) translateX(200px) translateZ(0);
          transform: translateY(0) rotate(-10deg) translateX(200px) translateZ(0);
}
.fnc-slide__content {
  z-index: 2;
  position: absolute;
  left: 40%;
  top: 40%;
}
.fnc-slide__heading {
  margin-bottom: 10px;
  text-transform: uppercase;
}
.fnc-slide__heading-line {
  overflow: hidden;
  position: relative;
  padding-right: 20px;
  font-size: 100px;
  color: #fff;
  word-spacing: 10px;
}
.fnc-slide__heading-line:nth-child(2) {
  padding-left: 30px;
}
.m--before-sliding .fnc-slide__heading-line {
  -webkit-transform: translateY(100%);
          transform: translateY(100%);
}
.m--active-slide .fnc-slide__heading-line {
  transition: -webkit-transform 1.5s 1s;
  transition: transform 1.5s 1s;
  transition: transform 1.5s 1s, -webkit-transform 1.5s 1s;
  -webkit-transform: translateY(0);
          transform: translateY(0);
}
.m--previous-slide .fnc-slide__heading-line {
  transition: -webkit-transform 1.5s;
  transition: transform 1.5s;
  transition: transform 1.5s, -webkit-transform 1.5s;
  -webkit-transform: translateY(-100%);
          transform: translateY(-100%);
}
.fnc-slide__heading-line span {
  display: block;
}
.m--before-sliding .fnc-slide__heading-line span {
  -webkit-transform: translateY(-100%);
          transform: translateY(-100%);
}
.m--active-slide .fnc-slide__heading-line span {
  transition: -webkit-transform 1.5s 1s;
  transition: transform 1.5s 1s;
  transition: transform 1.5s 1s, -webkit-transform 1.5s 1s;
  -webkit-transform: translateY(0);
          transform: translateY(0);
}
.m--previous-slide .fnc-slide__heading-line span {
  transition: -webkit-transform 1.5s;
  transition: transform 1.5s;
  transition: transform 1.5s, -webkit-transform 1.5s;
  -webkit-transform: translateY(100%);
          transform: translateY(100%);
}
.fnc-slide__action-btn {
  position: relative;
  margin-left: 200px;
  padding: 5px 15px;
  font-size: 20px;
  line-height: 1;
  color: transparent;
  border: none;
  text-transform: uppercase;
  background: transparent;
  cursor: pointer;
  text-align: center;
  outline: none;
}
.fnc-slide__action-btn span {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  -webkit-perspective: 1000px;
          perspective: 1000px;
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
  transition: -webkit-transform 0.3s;
  transition: transform 0.3s;
  transition: transform 0.3s, -webkit-transform 0.3s;
  -webkit-transform-origin: 50% 0;
          transform-origin: 50% 0;
  line-height: 30px;
  color: #fff;
}
.fnc-slide__action-btn span:before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  border: 2px solid #fff;
  border-top: none;
  border-bottom: none;
}
.fnc-slide__action-btn span:after {
  content: attr(data-text);
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  line-height: 30px;
  background: #1F2833;
  opacity: 0;
  -webkit-transform-origin: 50% 0;
          transform-origin: 50% 0;
  -webkit-transform: translateY(100%) rotateX(-90deg);
          transform: translateY(100%) rotateX(-90deg);
  transition: opacity 0.15s 0.15s;
}
.fnc-slide__action-btn:hover span {
  -webkit-transform: rotateX(90deg);
          transform: rotateX(90deg);
}
.fnc-slide__action-btn:hover span:after {
  opacity: 1;
  transition: opacity 0.15s;
}
.fnc-nav {
  z-index: 5;
  position: absolute;
  right: 0;
  bottom: 0;
}
.fnc-nav__bgs {
  z-index: -1;
  overflow: hidden;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
}
.fnc-nav__bg {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
}
.fnc-nav__bg.m--nav-bg-before {
  z-index: 2 !important;
  -webkit-transform: translateX(100%);
          transform: translateX(100%);
}
.fnc-nav__bg.m--active-nav-bg {
  z-index: 1;
  transition: -webkit-transform 1s 0.6666666667s;
  transition: transform 1s 0.6666666667s;
  transition: transform 1s 0.6666666667s, -webkit-transform 1s 0.6666666667s;
  -webkit-transform: translateX(0);
          transform: translateX(0);
}
.fnc-nav__controls {
  font-size: 0;
}
.fnc-nav__control {
  overflow: hidden;
  position: relative;
  display: inline-block;
  vertical-align: top;
  width: 100px;
  height: 50px;
  font-size: 14px;
  color: #fff;
  text-transform: uppercase;
  background: transparent;
  border: none;
  outline: none;
  cursor: pointer;
  transition: background-color 0.5s;
}
.fnc-nav__control.m--active-control {
  background: #1F2833;
}
.fnc-nav__control-progress {
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 2px;
  background: #fff;
  -webkit-transform-origin: 0 50%;
          transform-origin: 0 50%;
  -webkit-transform: scaleX(0);
          transform: scaleX(0);
  transition-timing-function: linear !important;
}
.m--with-autosliding .m--active-control .fnc-nav__control-progress {
  -webkit-transform: scaleX(1);
          transform: scaleX(1);
}
.m--prev-control .fnc-nav__control-progress {
  -webkit-transform: translateX(100%);
          transform: translateX(100%);
  transition: -webkit-transform 0.5s !important;
  transition: transform 0.5s !important;
  transition: transform 0.5s, -webkit-transform 0.5s !important;
}
.m--reset-progress .fnc-nav__control-progress {
  -webkit-transform: scaleX(0);
          transform: scaleX(0);
  transition: -webkit-transform 0s 0s !important;
  transition: transform 0s 0s !important;
  transition: transform 0s 0s, -webkit-transform 0s 0s !important;
}
.m--autosliding-blocked .fnc-nav__control-progress {
  transition: all 0s 0s !important;
  -webkit-transform: scaleX(0) !important;
          transform: scaleX(0) !important;
}

/* NOT PART OF COMMON SLIDER STYLES */
body {
  margin: 0;
}

.demo-cont {
  overflow: hidden;
  position: relative;
  height: 100vh;
  -webkit-perspective: 1500px;
          perspective: 1500px;
  background: #000;
}
.demo-cont__credits {
  box-sizing: border-box;
  overflow-y: auto;
  z-index: 1;
  position: absolute;
  right: 0;
  top: 0;
  width: 400px;
  height: 100%;
  padding: 20px 10px 30px;
  background: #303030;
  font-family: "Open Sans", Helvetica, Arial, sans-serif;
  color: #fff;
  text-align: center;
  transition: -webkit-transform 0.7s;
  transition: transform 0.7s;
  transition: transform 0.7s, -webkit-transform 0.7s;
  -webkit-transform: translate3d(100%, 0, 0) rotateY(-45deg);
          transform: translate3d(100%, 0, 0) rotateY(-45deg);
  will-change: transform;
}
.credits-active .demo-cont__credits {
  transition: -webkit-transform 0.7s 0.2333333333s;
  transition: transform 0.7s 0.2333333333s;
  transition: transform 0.7s 0.2333333333s, -webkit-transform 0.7s 0.2333333333s;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}
.demo-cont__credits *, .demo-cont__credits *:before, .demo-cont__credits *:after {
  box-sizing: border-box;
}
.demo-cont__credits-close {
  position: absolute;
  right: 20px;
  top: 20px;
  width: 28px;
  height: 28px;
  cursor: pointer;
}
.demo-cont__credits-close:before, .demo-cont__credits-close:after {
  content: "";
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  height: 2px;
  margin-top: -1px;
  background: #fff;
}
.demo-cont__credits-close:before {
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}
.demo-cont__credits-close:after {
  -webkit-transform: rotate(-45deg);
          transform: rotate(-45deg);
}
.demo-cont__credits-heading {
  text-transform: uppercase;
  font-size: 40px;
  margin-bottom: 20px;
}
.demo-cont__credits-img {
  display: block;
  width: 60%;
  margin: 0 auto 30px;
  border-radius: 10px;
}
.demo-cont__credits-name {
  margin-bottom: 20px;
  font-size: 30px;
}
.demo-cont__credits-link {
  display: block;
  margin-bottom: 10px;
  font-size: 24px;
  color: #fff;
}
.demo-cont__credits-blend {
  font-size: 30px;
  margin-bottom: 10px;
}

.example-slider {
  z-index: 2;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
  transition: -webkit-transform 0.7s;
  transition: transform 0.7s;
  transition: transform 0.7s, -webkit-transform 0.7s;
}
.credits-active .example-slider {
  -webkit-transform: translate3d(-400px, 0, 0) rotateY(10deg) scale(0.9);
          transform: translate3d(-400px, 0, 0) rotateY(10deg) scale(0.9);
}
.example-slider .fnc-slide-1 .fnc-slide__inner,
.example-slider .fnc-slide-1 .fnc-slide__mask-inner {
  background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/blackwidow.jpg");
}
.example-slider .fnc-slide-2 .fnc-slide__inner,
.example-slider .fnc-slide-2 .fnc-slide__mask-inner {
  background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/captainamerica.jpg");
}
.example-slider .fnc-slide-3 .fnc-slide__inner,
.example-slider .fnc-slide-3 .fnc-slide__mask-inner {
  background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/ironman-alt.jpg");
}
.example-slider .fnc-slide-3 .fnc-slide__inner:before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.1);
}
.example-slider .fnc-slide-4 .fnc-slide__inner,
.example-slider .fnc-slide-4 .fnc-slide__mask-inner {
  background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/142996/thor.jpg");
}
.example-slider .fnc-slide-4 .fnc-slide__inner:before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.2);
}
.example-slider .fnc-slide__heading,
.example-slider .fnc-slide__action-btn,
.example-slider .fnc-nav__control {
  font-family: "Open Sans", Helvetica, Arial, sans-serif;
}

/* COLORFUL SWITCH STYLES 
   ORIGINAL DEMO - https://codepen.io/suez/pen/WQjwOb */
.colorful-switch {
  position: relative;
  width: 180px;
  height: 77.1428571429px;
  margin: 0 auto;
  border-radius: 32.1428571429px;
  background: #cfcfcf;
}
.colorful-switch:before {
  content: "";
  z-index: -1;
  position: absolute;
  left: -5px;
  top: -5px;
  width: 190px;
  height: 87.1428571429px;
  border-radius: 37.1428571429px;
  background: #314239;
  transition: background-color 0.3s;
}
.colorful-switch:hover:before {
  background: #4C735F;
}
.colorful-switch__checkbox {
  z-index: -10;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
.colorful-switch__label {
  z-index: 1;
  overflow: hidden;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  border-radius: 32.1428571429px;
  cursor: pointer;
}
.colorful-switch__bg {
  position: absolute;
  left: 0;
  top: 0;
  width: 540px;
  height: 100%;
  background: linear-gradient(90deg, #14DCD6 0, #10E7BD 180px, #EF9C29 360px, #E76339 100%);
  transition: -webkit-transform 0.5s;
  transition: transform 0.5s;
  transition: transform 0.5s, -webkit-transform 0.5s;
  -webkit-transform: translate3d(-360px, 0, 0);
          transform: translate3d(-360px, 0, 0);
}
.colorful-switch__checkbox:checked ~ .colorful-switch__label .colorful-switch__bg {
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}
.colorful-switch__dot {
  position: absolute;
  left: 131.1428571429px;
  top: 50%;
  width: 5.1428571429px;
  height: 5.1428571429px;
  margin-left: -2.5714285714px;
  margin-top: -2.5714285714px;
  border-radius: 50%;
  background: #fff;
  transition: -webkit-transform 0.5s;
  transition: transform 0.5s;
  transition: transform 0.5s, -webkit-transform 0.5s;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}
.colorful-switch__checkbox:checked ~ .colorful-switch__label .colorful-switch__dot {
  -webkit-transform: translate3d(-80.3571428571px, 0, 0);
          transform: translate3d(-80.3571428571px, 0, 0);
}
.colorful-switch__on {
  position: absolute;
  left: 104.1428571429px;
  top: 22.5px;
  width: 19.2857142857px;
  height: 36px;
  transition: -webkit-transform 0.5s;
  transition: transform 0.5s;
  transition: transform 0.5s, -webkit-transform 0.5s;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}
.colorful-switch__checkbox:checked ~ .colorful-switch__label .colorful-switch__on {
  -webkit-transform: translate3d(-80.3571428571px, 0, 0);
          transform: translate3d(-80.3571428571px, 0, 0);
}
.colorful-switch__on__inner {
  position: absolute;
  width: 100%;
  height: 100%;
  transition: -webkit-transform 0.25s 0s cubic-bezier(0.52, -0.96, 0.51, 1.28);
  transition: transform 0.25s 0s cubic-bezier(0.52, -0.96, 0.51, 1.28);
  transition: transform 0.25s 0s cubic-bezier(0.52, -0.96, 0.51, 1.28), -webkit-transform 0.25s 0s cubic-bezier(0.52, -0.96, 0.51, 1.28);
  -webkit-transform-origin: 100% 50%;
          transform-origin: 100% 50%;
  -webkit-transform: rotate(45deg) scale(0) translateZ(0);
          transform: rotate(45deg) scale(0) translateZ(0);
}
.colorful-switch__checkbox:checked ~ .colorful-switch__label .colorful-switch__on__inner {
  transition: -webkit-transform 0.25s 0.25s cubic-bezier(0.67, -0.16, 0.47, 1.61);
  transition: transform 0.25s 0.25s cubic-bezier(0.67, -0.16, 0.47, 1.61);
  transition: transform 0.25s 0.25s cubic-bezier(0.67, -0.16, 0.47, 1.61), -webkit-transform 0.25s 0.25s cubic-bezier(0.67, -0.16, 0.47, 1.61);
  -webkit-transform: rotate(45deg) scale(1) translateZ(0);
          transform: rotate(45deg) scale(1) translateZ(0);
}
.colorful-switch__on__inner:before, .colorful-switch__on__inner:after {
  content: "";
  position: absolute;
  border-radius: 2.5714285714px;
  background: #fff;
}
.colorful-switch__on__inner:before {
  left: 0;
  bottom: 0;
  width: 100%;
  height: 6.1428571429px;
}
.colorful-switch__on__inner:after {
  right: 0;
  top: 0;
  width: 6.1428571429px;
  height: 100%;
}
.colorful-switch__off {
  position: absolute;
  left: 131.1428571429px;
  top: 50%;
  width: 41.1428571429px;
  height: 41.1428571429px;
  margin-left: -20.5714285714px;
  margin-top: -20.5714285714px;
  transition: -webkit-transform 0.5s;
  transition: transform 0.5s;
  transition: transform 0.5s, -webkit-transform 0.5s;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}
.colorful-switch__checkbox:checked ~ .colorful-switch__label .colorful-switch__off {
  -webkit-transform: translate3d(-80.3571428571px, 0, 0);
          transform: translate3d(-80.3571428571px, 0, 0);
}
.colorful-switch__off:before, .colorful-switch__off:after {
  content: "";
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  height: 5.1428571429px;
  margin-top: -2.5714285714px;
  border-radius: 2.5714285714px;
  background: #fff;
  transition: -webkit-transform 0.25s 0.25s;
  transition: transform 0.25s 0.25s;
  transition: transform 0.25s 0.25s, -webkit-transform 0.25s 0.25s;
}
.colorful-switch__checkbox:checked ~ .colorful-switch__label .colorful-switch__off:before, .colorful-switch__checkbox:checked ~ .colorful-switch__label .colorful-switch__off:after {
  transition-delay: 0s;
}
.colorful-switch__off:before {
  -webkit-transform: rotate(45deg) scaleX(1) translateZ(0);
          transform: rotate(45deg) scaleX(1) translateZ(0);
}
.colorful-switch__checkbox:checked ~ .colorful-switch__label .colorful-switch__off:before {
  -webkit-transform: rotate(45deg) scaleX(0) translateZ(0);
          transform: rotate(45deg) scaleX(0) translateZ(0);
}
.colorful-switch__off:after {
  transition-timing-function: cubic-bezier(0.67, -0.16, 0.47, 1.61);
  -webkit-transform: rotate(-45deg) scaleX(1) translateZ(0);
          transform: rotate(-45deg) scaleX(1) translateZ(0);
}
.colorful-switch__checkbox:checked ~ .colorful-switch__label .colorful-switch__off:after {
  transition-timing-function: ease;
  -webkit-transform: rotate(-45deg) scaleX(0) translateZ(0);
          transform: rotate(-45deg) scaleX(0) translateZ(0);
}


    </style>

    <!-- 
Please note, that you can apply .m--global-blending-active to .fnc-slider 
to enable blend-mode for all background-images or apply .m--blend-bg-active
to some specific slides (.fnc-slide). It's disabled by default in this demo,
because it requires specific images, where more than 50% of bg is transparent or monotone
-->
<div class="demo-cont">
        <!-- slider start -->
        <div class="fnc-slider example-slider">
          <div class="fnc-slider__slides">
            <!-- slide start -->
            <div class="fnc-slide m--blend-green m--active-slide">
              <div class="fnc-slide__inner">
                <div class="fnc-slide__mask">
                  <div class="fnc-slide__mask-inner"></div>
                </div>
                <div class="fnc-slide__content">
                  <h2 class="fnc-slide__heading">
                    <div class="fnc-slide__heading-line">
                      <span>Black</span>
                    </div>
                    <div class="fnc-slide__heading-line">
                      <span>Widow</span>
                    </div>
                  </h2>
                  <button type="button" class="fnc-slide__action-btn">
                    Credits
                    <span data-text="Credits">Credits</span>
                  </button>
                </div>
              </div>
            </div>
            <!-- slide end -->
            <!-- slide start -->
            <div class="fnc-slide m--blend-dark">
              <div class="fnc-slide__inner">
                <div class="fnc-slide__mask">
                  <div class="fnc-slide__mask-inner"></div>
                </div>
                <div class="fnc-slide__content">
                  <h2 class="fnc-slide__heading">
                    <div class="fnc-slide__heading-line">
                      <span>Captain</span>
                    </div>
                    <div class="fnc-slide__heading-line">
                      <span>America</span>
                    </div>
                  </h2>
                  <button type="button" class="fnc-slide__action-btn">
                    Credits
                    <span data-text="Credits">Credits</span>
                  </button>
                </div>
              </div>
            </div>
            <!-- slide end -->
            <!-- slide start -->
            <div class="fnc-slide m--blend-red">
              <div class="fnc-slide__inner">
                <div class="fnc-slide__mask">
                  <div class="fnc-slide__mask-inner"></div>
                </div>
                <div class="fnc-slide__content">
                  <h2 class="fnc-slide__heading">
                    <div class="fnc-slide__heading-line">
                      <span>Iron</span>
                    </div>
                    <div class="fnc-slide__heading-line">
                      <span>Man</span>
                    </div>
                  </h2>
                  <button type="button" class="fnc-slide__action-btn">
                    Credits
                    <span data-text="Credits">Credits</span>
                  </button>
                </div>
              </div>
            </div>
            <!-- slide end -->
            <!-- slide start -->
            <div class="fnc-slide m--blend-blue">
              <div class="fnc-slide__inner">
                <div class="fnc-slide__mask">
                  <div class="fnc-slide__mask-inner"></div>
                </div>
                <div class="fnc-slide__content">
                  <h2 class="fnc-slide__heading">
                    <div class="fnc-slide__heading-line">
                      <span>Thor</span>
                    </div>
                    <div class="fnc-slide__heading-line">
                      <span>Just Thor</span>
                    </div>
                  </h2>
                  <button type="button" class="fnc-slide__action-btn">
                    Credits
                    <span data-text="Credits">Credits</span>
                  </button>
                </div>
              </div>
            </div>
            <!-- slide end -->
          </div>
          <nav class="fnc-nav">
            <div class="fnc-nav__bgs">
              <div class="fnc-nav__bg m--navbg-green m--active-nav-bg"></div>
              <div class="fnc-nav__bg m--navbg-dark"></div>
              <div class="fnc-nav__bg m--navbg-red"></div>
              <div class="fnc-nav__bg m--navbg-blue"></div>
            </div>
            <div class="fnc-nav__controls">
              <button class="fnc-nav__control">
                Black Widow
                <span class="fnc-nav__control-progress"></span>
              </button>
              <button class="fnc-nav__control">
                Captain America
                <span class="fnc-nav__control-progress"></span>
              </button>
              <button class="fnc-nav__control">
                Iron Man
                <span class="fnc-nav__control-progress"></span>
              </button>
              <button class="fnc-nav__control">
                Thor
                <span class="fnc-nav__control-progress"></span>
              </button>
            </div>
          </nav>
        </div>
        <!-- slider end -->
        <div class="demo-cont__credits">
          <div class="demo-cont__credits-close"></div>
          <h2 class="demo-cont__credits-heading">Made by</h2>
          <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/142996/profile/profile-512_5.jpg" alt="" class="demo-cont__credits-img" />
          <h3 class="demo-cont__credits-name">Nikolay Talanov</h3>
          <a href="https://codepen.io/suez/" target="_blank" class="demo-cont__credits-link">My codepen</a>
          <a href="https://twitter.com/NikolayTalanov" target="_blank" class="demo-cont__credits-link">My twitter</a>
          <h2 class="demo-cont__credits-heading">Based on</h2>
          <a href="https://dribbble.com/shots/2375246-Fashion-Butique-slider-animation" target="_blank" class="demo-cont__credits-link">Concept by Kreativa Studio</a>
          <h4 class="demo-cont__credits-blend">Global Blend Mode</h4>
          <div class="colorful-switch">
            <input type="checkbox" class="colorful-switch__checkbox js-activate-global-blending" id="colorful-switch-cb" />
            <label class="colorful-switch__label" for="colorful-switch-cb">
              <span class="colorful-switch__bg"></span>
              <span class="colorful-switch__dot"></span>
              <span class="colorful-switch__on">
                <span class="colorful-switch__on__inner"></span>
              </span>
              <span class="colorful-switch__off"></span>
            </label>
          </div>
        </div>
      </div>
      <script>
      (function() {

var $$ = function(selector, context) {
  var context = context || document;
  var elements = context.querySelectorAll(selector);
  return [].slice.call(elements);
};

function _fncSliderInit($slider, options) {
  var prefix = ".fnc-";

  var $slider = $slider;
  var $slidesCont = $slider.querySelector(prefix + "slider__slides");
  var $slides = $$(prefix + "slide", $slider);
  var $controls = $$(prefix + "nav__control", $slider);
  var $controlsBgs = $$(prefix + "nav__bg", $slider);
  var $progressAS = $$(prefix + "nav__control-progress", $slider);

  var numOfSlides = $slides.length;
  var curSlide = 1;
  var sliding = false;
  var slidingAT = +parseFloat(getComputedStyle($slidesCont)["transition-duration"]) * 1000;
  var slidingDelay = +parseFloat(getComputedStyle($slidesCont)["transition-delay"]) * 1000;

  var autoSlidingActive = false;
  var autoSlidingTO;
  var autoSlidingDelay = 5000; // default autosliding delay value
  var autoSlidingBlocked = false;

  var $activeSlide;
  var $activeControlsBg;
  var $prevControl;

  function setIDs() {
    $slides.forEach(function($slide, index) {
      $slide.classList.add("fnc-slide-" + (index + 1));
    });

    $controls.forEach(function($control, index) {
      $control.setAttribute("data-slide", index + 1);
      $control.classList.add("fnc-nav__control-" + (index + 1));
    });

    $controlsBgs.forEach(function($bg, index) {
      $bg.classList.add("fnc-nav__bg-" + (index + 1));
    });
  };

  setIDs();

  function afterSlidingHandler() {
    $slider.querySelector(".m--previous-slide").classList.remove("m--active-slide", "m--previous-slide");
    $slider.querySelector(".m--previous-nav-bg").classList.remove("m--active-nav-bg", "m--previous-nav-bg");

    $activeSlide.classList.remove("m--before-sliding");
    $activeControlsBg.classList.remove("m--nav-bg-before");
    $prevControl.classList.remove("m--prev-control");
    $prevControl.classList.add("m--reset-progress");
    var triggerLayout = $prevControl.offsetTop;
    $prevControl.classList.remove("m--reset-progress");

    sliding = false;
    var layoutTrigger = $slider.offsetTop;

    if (autoSlidingActive && !autoSlidingBlocked) {
      setAutoslidingTO();
    }
  };

  function performSliding(slideID) {
    if (sliding) return;
    sliding = true;
    window.clearTimeout(autoSlidingTO);
    curSlide = slideID;

    $prevControl = $slider.querySelector(".m--active-control");
    $prevControl.classList.remove("m--active-control");
    $prevControl.classList.add("m--prev-control");
    $slider.querySelector(prefix + "nav__control-" + slideID).classList.add("m--active-control");

    $activeSlide = $slider.querySelector(prefix + "slide-" + slideID);
    $activeControlsBg = $slider.querySelector(prefix + "nav__bg-" + slideID);

    $slider.querySelector(".m--active-slide").classList.add("m--previous-slide");
    $slider.querySelector(".m--active-nav-bg").classList.add("m--previous-nav-bg");

    $activeSlide.classList.add("m--before-sliding");
    $activeControlsBg.classList.add("m--nav-bg-before");

    var layoutTrigger = $activeSlide.offsetTop;

    $activeSlide.classList.add("m--active-slide");
    $activeControlsBg.classList.add("m--active-nav-bg");

    setTimeout(afterSlidingHandler, slidingAT + slidingDelay);
  };



  function controlClickHandler() {
    if (sliding) return;
    if (this.classList.contains("m--active-control")) return;
    if (options.blockASafterClick) {
      autoSlidingBlocked = true;
      $slider.classList.add("m--autosliding-blocked");
    }

    var slideID = +this.getAttribute("data-slide");

    performSliding(slideID);
  };

  $controls.forEach(function($control) {
    $control.addEventListener("click", controlClickHandler);
  });

  function setAutoslidingTO() {
    window.clearTimeout(autoSlidingTO);
    var delay = +options.autoSlidingDelay || autoSlidingDelay;
    curSlide++;
    if (curSlide > numOfSlides) curSlide = 1;

    autoSlidingTO = setTimeout(function() {
      performSliding(curSlide);
    }, delay);
  };

  if (options.autoSliding || +options.autoSlidingDelay > 0) {
    if (options.autoSliding === false) return;
    
    autoSlidingActive = true;
    setAutoslidingTO();
    
    $slider.classList.add("m--with-autosliding");
    var triggerLayout = $slider.offsetTop;
    
    var delay = +options.autoSlidingDelay || autoSlidingDelay;
    delay += slidingDelay + slidingAT;
    
    $progressAS.forEach(function($progress) {
      $progress.style.transition = "transform " + (delay / 1000) + "s";
    });
  }
  
  $slider.querySelector(".fnc-nav__control:first-child").classList.add("m--active-control");

};

var fncSlider = function(sliderSelector, options) {
  var $sliders = $$(sliderSelector);

  $sliders.forEach(function($slider) {
    _fncSliderInit($slider, options);
  });
};

window.fncSlider = fncSlider;
}());

/* not part of the slider scripts */

/* Slider initialization
options:
autoSliding - boolean
autoSlidingDelay - delay in ms. If audoSliding is on and no value provided, default value is 5000
blockASafterClick - boolean. If user clicked any sliding control, autosliding won't start again
*/
fncSlider(".example-slider", {autoSlidingDelay: 4000});

var $demoCont = document.querySelector(".demo-cont");

[].slice.call(document.querySelectorAll(".fnc-slide__action-btn")).forEach(function($btn) {
$btn.addEventListener("click", function() {
  $demoCont.classList.toggle("credits-active");
});
});

document.querySelector(".demo-cont__credits-close").addEventListener("click", function() {
$demoCont.classList.remove("credits-active");
});

document.querySelector(".js-activate-global-blending").addEventListener("click", function() {
document.querySelector(".example-slider").classList.toggle("m--global-blending-active");
});
</script>

</section>

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About us</strong></h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <h2> {{ $abouts->title }}</h2>
            <h3>{{ $abouts->short_dis }}</h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p>
            {{ $abouts->long_dis }}
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section class="c-section">
    <h2 class="c-section__title"><span>Our Services</span></h2>
    <ul class="c-services">
        <li class="c-services__item">
        <h3>Responsive Web Design</h3>
        <p>We leverage the concept of mobile-first design. Through our work, we focus on designing an experience that works across different screen sizes.</p>
        </li>
        <li class="c-services__item">
        <h3>UX Auditing</h3>
        <p>If you are unsure of how your app behaves, we can help by doing a detailed UX audit that will highlight most of the issues in your product. From there, we can take it further and fix all issues.</p>
        </li>
        <li class="c-services__item">
        <h3>Front End Development</h3>
        <p>We are Front End masters with a deep focus on HTML, CSS. The result of our work is a responsive, accessible, and performant websites. Either you have the design ready and want us to code it, or you want us to do both design and code, we&rsquo;re happy to do so.</p>
        </li>
        <li class="c-services__item">
        <h3>UX Consultation</h3>
        <p>If you don&rsquo;t know what kind of service to request from us, don&rsquo;t worry. We can help and see what fits your business and your budget.</p>
        </li>
        <li class="c-services__item">
        <h3>Mobile Apps Design</h3>
        <p>To reach more customers and the goals of your business, a mobile application is necessary these days. We will work on the app design from scratch to final tested prototype.</p>
        </li>
        <li class="c-services__item">
        <h3>UX Research</h3>
        <p>It&rsquo;s important to research deeply for the product you want to build. We help in that by defining the user audience, working on user stories, competitive analysis and much more. </p>
        </li>
    </ul>
    </section>
    <style>
      
    :root {
    --color-brand-primary: hsl(var(--color-brand-primary-h), 43%, 43%);
    --color-brand-primary-h: 251;
    --color-brand-primary-s: 43%;
    --color-brand-primary-l: 43%;
    --color-brand-accent: hsl(var(--color-brand-accent-h), 96%, 61%);
    --color-brand-accent-h: 16;
    --color-brand-accent-s: 96%;
    --color-brand-accent-l: 61%;
    --color-brand-accent-bg: hsl(calc(var(--color-brand-accent-h) + 17), 100%, 96%);
    --ratio: 1.4;
    --s-6: calc(var(--s-5) / var(--ratio));
    --s-5: calc(var(--s-4) / var(--ratio));
    --s-4: calc(var(--s-3) / var(--ratio));
    --s-3: calc(var(--s-2) / var(--ratio));
    --s-2: calc(var(--s-1) / var(--ratio));
    --s-1: calc(var(--s0) / var(--ratio));
    --s0: calc(1.05rem + 0.333vw);
    --s1: calc(var(--s0) * var(--ratio));
    --s2: calc(var(--s1) * var(--ratio));
    --s3: calc(var(--s2) * var(--ratio));
    --s4: calc(var(--s3) * var(--ratio));
    --s5: calc(var(--s4) * var(--ratio));
    --s6: calc(var(--s5) * var(--ratio));
    font-size: 62.5%;
    line-height: 1.6;
    box-sizing: border-box;
    }
    @media (min-width: 40.625em) {
    :root {
        --s0: calc(1.25rem + 0.333vw);
    }
    }
    @media (min-width: 48em) {
    :root {
        --s0: calc(1.4rem + 0.333vw);
    }
    }
    @media (min-width: 62em) {
    :root {
        --s0: calc(1.6rem + 0.333vw);
    }
    }

    *, *:before, *:after {
    box-sizing: inherit;
    }

    body {
    font-size: 1.4rem;
    font-family: 'Inter', sans-serif;
    font-weight: 300;
    background-color: white;
    min-height: 100vh;
    }
    @media (min-width: 48em) {
    body {
        font-size: 1.5rem;
    }
    }

    @supports (font-variation-settings: normal) {
    body {
        font-family: "Inter var", sans-serif,arial;
    }
    }
    h2, h3, p, ul {
    margin: 0;
    }

    ul {
    padding: 0;
    }
    ul li {
    /* Remove li Bullets with zero-width space for accessability */
    list-style-type: none;
    }
    ul li:before {
    content: "\200B";
    /* add zero-width space */
    clip: rect(0 0 0 0);
    height: 1px;
    width: 1px;
    position: absolute;
    }

    .c-section {
    padding: 0 var(--s3);
    }
    .c-section__title {
    padding: var(--s2) var(--s3) calc(var(--s6) * 1.8);
    margin: 0 calc(var(--s3) * -1);
    color: #fff;
    font-size: var(--s4);
    font-weight: 700;
    letter-spacing: -0.04em;
    text-align: center;
    }
    @media (min-width: 40.625em) {
    .c-section__title {
        padding: var(--s2) var(--s3) var(--s4);
    }
    }
    @media (min-width: 40.625em) {
    .c-section__title {
        display: -webkit-box;
        display: flex;
        -webkit-box-align: self-start;
                align-items: self-start;
        -webkit-box-pack: end;
                justify-content: flex-end;
        position: relative;
        text-align: unset;
    }
    }
    .c-section__title:after {
    content: '';
    display: block;
    background-size: calc(var(--s5) * 3) calc(var(--s5) * 3);
    width: calc(var(--s5) * 3);
    height: calc(var(--s5) * 3);
    background-repeat: no-repeat;
    background-position: center;
    margin-left: auto;
    margin-right: auto;
    -webkit-transform: translateY(11rem);
            transform: translateY(11rem);
    z-index: 1;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' id='aadef149-4ba5-4382-9e09-7df651a328a5' data-name='Layer 1' width='704' height='745.19433' viewBox='0 0 704 745.19433' class='injected-svg modal__media modal__lg_media' data-src='https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/mobile_web_2g8b.svg'%3E%3Ctitle%3Emobile_web%3C/title%3E%3Cpath d='M344.69391,661.25125l-8.38722-33.073A429.46111,429.46111,0,0,0,290.74208,611.834l-1.05792,15.37062L285.39,610.2712c-19.202-5.482-32.265-7.89648-32.265-7.89648s17.64872,67.09731,54.6606,118.39272l43.124,7.57249-33.50125,4.83219A173.75069,173.75069,0,0,0,332.395,749.05228c53.84043,49.96979,113.80669,72.89422,133.93843,51.20309s-7.1946-79.78376-61.035-129.75355c-16.69106-15.49113-37.65818-27.92221-58.646-37.70546Z' transform='translate(-248 -77.40283)' fill='%23fb6f3c'/%3E%3Cpath d='M424.44317,625.32976l9.91563-32.64732a429.46451,429.46451,0,0,0-30.557-37.54385L394.9511,567.7497l5.07688-16.71545c-13.60408-14.61837-23.53857-23.43755-23.53857-23.43755s-19.57459,66.561-14.40543,129.60362l33.00186,28.77326L363.9095,672.79331a173.75138,173.75138,0,0,0,4.62073,21.34072c20.26038,70.60659,59.74453,121.22757,88.19038,113.06511s35.08143-72.01738,14.821-142.624c-6.28092-21.88874-17.80407-43.36822-30.71362-62.59176Z' transform='translate(-248 -77.40283)' fill='%23fb6f3c'/%3E%3Cellipse cx='352' cy='727.19433' rx='352' ry='18' fill='%233f3d56'/%3E%3Cpath d='M805.65354,250.35009h-3.99878V140.80476a63.40186,63.40186,0,0,0-63.40205-63.40193H506.16627a63.40186,63.40186,0,0,0-63.402,63.40193V741.77894a63.40186,63.40186,0,0,0,63.402,63.40193H738.25271a63.40186,63.40186,0,0,0,63.40205-63.40193V328.32631h3.99878Z' transform='translate(-248 -77.40283)' fill='%233f3d56'/%3E%3Cpath d='M788.16,141.24713v600.09a47.3508,47.3508,0,0,1-47.35,47.35H507.61a47.35084,47.35084,0,0,1-47.35-47.35v-600.09a47.35089,47.35089,0,0,1,47.35-47.35H535.9a22.50661,22.50661,0,0,0,20.83,30.99H689.69a22.50673,22.50673,0,0,0,20.83-30.99h30.29A47.35084,47.35084,0,0,1,788.16,141.24713Z' transform='translate(-248 -77.40283)' fill='%23fff'/%3E%3Cpath d='M788.16,612.40716v128.93a47.3508,47.3508,0,0,1-47.35,47.35H507.61a47.35084,47.35084,0,0,1-47.35-47.35v-116.36a222.97136,222.97136,0,0,1,327.9-12.57Z' transform='translate(-248 -77.40283)' fill='%23e6e6e6'/%3E%3Cpolygon points='322.174 511.167 312.75 511.167 315.891 327.064 319.033 327.064 322.174 511.167' fill='%23e6e6e6'/%3E%3Cpath d='M578.02779,288.5586l15.21367-23.512a352.49687,352.49687,0,0,0-15.60827-36.53743l-9.83764,7.94573,7.78946-12.03815c-7.42343-14.61275-13.26462-23.81956-13.26462-23.81956s-30.5115,48.08118-40.70521,98.98824l19.52266,30.17145L519.5254,312.3006a142.61,142.61,0,0,0-1.18572,17.8826c0,60.291,19.69081,109.16642,43.98071,109.16642s43.98072-48.87547,43.98072-109.16642c0-18.69079-4.22846-38.24546-10.0614-56.33418Z' transform='translate(-248 -77.40283)' fill='%23e6e6e6'/%3E%3Cpolygon points='267.479 524.167 262.908 524.167 264.432 434.879 265.955 434.879 267.479 524.167' fill='%23e6e6e6'/%3E%3Cpath d='M519.28775,456.06773l7.37846-11.40307a170.95723,170.95723,0,0,0-7.56983-17.72025l-4.77115,3.85359,3.7778-5.83837c-3.60028-7.087-6.43319-11.55223-6.43319-11.55223s-14.79775,23.31885-19.74158,48.00821l9.46827,14.63282-10.48179-8.46609a69.16528,69.16528,0,0,0-.57506,8.67286c0,29.24044,9.54982,52.94451,21.33016,52.94451S533,505.49564,533,476.2552c0-9.06483-2.05076-18.54863-4.87967-27.32146Z' transform='translate(-248 -77.40283)' fill='%23e6e6e6'/%3E%3Cpolygon points='386.479 524.167 381.908 524.167 383.432 434.879 384.955 434.879 386.479 524.167' fill='%23e6e6e6'/%3E%3Cpath d='M638.28775,456.06773l7.37846-11.40307a170.95723,170.95723,0,0,0-7.56983-17.72025l-4.77115,3.85359,3.7778-5.83837c-3.60028-7.087-6.43319-11.55223-6.43319-11.55223s-14.79775,23.31885-19.74158,48.00821l9.46827,14.63282-10.48179-8.46609a69.16528,69.16528,0,0,0-.57506,8.67286c0,29.24044,9.54982,52.94451,21.33016,52.94451S652,505.49564,652,476.2552c0-9.06483-2.05076-18.54863-4.87967-27.32146Z' transform='translate(-248 -77.40283)' fill='%23e6e6e6'/%3E%3Ccircle cx='264' cy='186.19433' r='42' fill='%23e6e6e6'/%3E%3Cpolygon points='415.872 234.173 492.533 236.077 502.852 144.666 415.872 144.666 415.872 234.173' fill='%232f2e41'/%3E%3Cpath d='M644.76993,239.9612l-21.14671-81.078s5.84211-38.92023,19.97409-38.27814-3.66865,38.049-3.66865,38.049l23.94311,70.03766Z' transform='translate(-248 -77.40283)' fill='%23ffb8b8'/%3E%3Cpath d='M686.22412,443.10875l3.31146,33.11459s-104.311,71.19639-104.311,100.99953-3.31146,124.17974-3.31146,124.17974l38.08179,1.65573,3.31146-44.70471s8.27865-49.67189,3.31146-67.88492l54.63908-41.39325s-16.5573,19.86876-13.24584,54.63909S663.0439,706.3698,663.0439,706.3698l39.73752,3.31146s4.96719-36.42606,6.62292-39.73752,9.93438-62.91773,1.65573-79.475l67.88493-79.475s23.18022-29.80314,0-59.60627l-13.24584-6.62292Z' transform='translate(-248 -77.40283)' fill='%232f2e41'/%3E%3Cpath d='M583.56887,694.77969l-3.31146,21.52449-21.52449,51.32763s-36.42606,18.213-9.93438,21.52449,36.42606-3.31146,41.39325-11.59011,14.90157-21.52449,14.90157-21.52449L603.43763,790.812h8.27865l13.56912-47.49194a29.95239,29.95239,0,0,0-5.09327-26.76756q-.09786-.12417-.1972-.24835c-6.62292-8.27865-3.31146-19.86876-3.31146-19.86876Z' transform='translate(-248 -77.40283)' fill='%232f2e41'/%3E%3Cpath d='M666.35536,694.77969l-3.31146,21.52449-21.52449,51.32763s-36.42605,18.213-9.93437,21.52449,36.426-3.31146,41.39324-11.59011,14.90157-21.52449,14.90157-21.52449L686.22412,790.812h8.27865l13.56913-47.49194a29.95239,29.95239,0,0,0-5.09328-26.76756q-.09786-.12417-.1972-.24835c-6.62292-8.27865-3.31146-19.86876-3.31146-19.86876Z' transform='translate(-248 -77.40283)' fill='%232f2e41'/%3E%3Ccircle cx='458.09288' cy='162.05113' r='33.1146' fill='%23ffb8b8'/%3E%3Cpath d='M704.43715,267.60138l14.90157,34.77032,29.80314-23.18022s-18.213-24.83594-18.213-28.1474Z' transform='translate(-248 -77.40283)' fill='%23ffb8b8'/%3E%3Cpath d='M707.74861,287.47013l7.06394,4.34051s22.82273-12.10094,28.576-20.6387c0,0,20.65486-6.882,28.93351,9.67527s-4.96719,130.80267-4.96719,130.80267,8.27865,11.59011,6.62292,16.5573S778.945,441.453,778.945,441.453v9.93438s-94.37661,1.65573-94.37661-6.62292V418.2728l-9.93438-3.31146s-9.93438,21.52449-13.24584,19.86876-19.86876-14.90157-19.86876-14.90157,26.49168-87.75369,41.39325-102.65526l18.213-31.45887Z' transform='translate(-248 -77.40283)' fill='%23fb6f3c'/%3E%3Cpath d='M704.43715,289.12586s-3.31146-6.62292-8.27865-8.27865-29.80314-36.42605-29.80314-36.42605l3.31146-18.213-33.1146-4.96719s1.65573,18.213,8.27865,29.80314,43.049,71.19638,43.049,71.19638l18.213-33.1146Z' transform='translate(-248 -77.40283)' fill='%23fb6f3c'/%3E%3Cpath d='M730.101,420.75639l-19.86875,59.60628s-41.39325,46.36044-18.213,46.36044,34.77032-41.39325,34.77032-41.39325l28.14741-59.60628Z' transform='translate(-248 -77.40283)' fill='%23ffb8b8'/%3E%3Cpath d='M666.40465,239.938c26.52245-10.63018,52.66949-12.89779,78.1352,0V218.51138A13.95535,13.95535,0,0,0,730.58449,204.556H677.42954a11.02489,11.02489,0,0,0-11.02489,11.02489Z' transform='translate(-248 -77.40283)' fill='%232f2e41'/%3E%3Cpath d='M750.79759,285.8144s15.10671-12.79586,23.28279,1.88072,3.20889,77.59432,1.55316,85.873-13.24584,59.60628-13.24584,59.60628l-39.73752-8.27865s-3.31146-23.18022,6.62292-21.52449Z' transform='translate(-248 -77.40283)' fill='%23fb6f3c'/%3E%3Cpath d='M767.27813,271.58657c-7.47508-4.10485-10.95384-13.3183-11.20173-21.8427-.24822-8.5244,1.81928-16.96078,1.98174-25.48727a19.70066,19.70066,0,0,0-.44217-5.19738,19.99152,19.99152,0,0,0-2.85872-5.91734c-9.72073-14.89484-26.61815-25.37235-44.41647-25.53721a19.72685,19.72685,0,0,0-7.51573,1.38171c-1.84014.737-2.44183.64676-2.79446,2.90614a18.80778,18.80778,0,0,0-12.90778.41044,43.67006,43.67006,0,0,0-11.28781,6.72245,50.91134,50.91134,0,0,0-5.707,4.94121c-9.4059,9.74414-11.57188,24.76187-8.847,38.02816.88586,4.313-3.3647,8.47684-6.88166,11.12594s-7.57824,5.08173-9.3054,9.132c-1.66117,3.89607-.74885,8.35188-1.08333,12.57414a21.50585,21.50585,0,0,1-13.71993,18.06931,6.619,6.619,0,0,0,6.38589,2.24579,15.71689,15.71689,0,0,0,6.65437-3.168,39.58173,39.58173,0,0,0,14.7562-21.89461c1.03307,4.69842.63244,9.54449.59442,14.355a40.097,40.097,0,0,1-2.90746,15.67932,22.95849,22.95849,0,0,1-10.57045,11.63912c4.6135,2.25911,9.69783.62172,13.60738-2.71074,3.90938-3.33246,6.21789-8.16974,7.83049-13.047a65.02715,65.02715,0,0,0,3.1334-24.67964A35.23865,35.23865,0,0,1,674.197,295.3399a36.73,36.73,0,0,1-12.45807,21.62429,71.55883,71.55883,0,0,0,32.75215-8.24838,18.53725,18.53725,0,0,0,6.71768-5.17351c3.251-4.50991,2.48187-10.6609,1.57006-16.14519-.72122-4.3364,4.69775-10.60546,1.5945-13.71918a5.14429,5.14429,0,0,0-3.44914-1.48246c-9.45259-.91006-18.20527-5.65746-23.25035-13.70275-3.53538-5.63781-5.87629-12.07592-5.87629-18.09738a32.93149,32.93149,0,1,1,64.38483,9.77247,66.08219,66.08219,0,0,0-2.39716,11.16014,87.6848,87.6848,0,0,1-2.6728,12.98267c-2.34787,8.17535-6.32542,16.51719-13.68526,20.7814,2.47315,1.35348,5.33556,1.41445,8.13766,1.72322,9.23506,1.01758,18.9478.79289,27.30655-3.26312C761.2304,289.496,767.87372,280.85839,767.27813,271.58657Z' transform='translate(-248 -77.40283)' fill='%232f2e41'/%3E%3Cpolygon points='490.38 252.288 481.739 323.422 482.101 255.6 490.38 252.288' opacity='0.2'/%3E%3Cpolygon points='518.772 336.291 515.216 358.255 523.494 361.567 518.772 336.291' opacity='0.2'/%3E%3C/svg%3E");
    }
    @media (min-width: 40.625em) {
    .c-section__title:after {
        margin-left: auto;
        margin-right: 0;
        -webkit-transform: translateY(2rem);
                transform: translateY(2rem);
    }
    }
    .c-section span:before {
    content: '';
    display: block;
    position: absolute;
    top: -100%;
    left: 0;
    width: 100%;
    height: 200%;
    -webkit-transform: skew(0deg, 10deg);
            transform: skew(0deg, 10deg);
    z-index: -1;
    background: var(--color-brand-primary);
    background-attachment: fixed;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='487' height='243.5' viewBox='0 0 1600 800' style='&%2310; opacity: .45;&%2310;'%3E%3Cpath fill='%23fdb9a0' d='M1102.5 734.8c2.5-1.2 24.8-8.6 25.6-7.5.5.7-3.9 23.8-4.6 24.5-.2.3-16-12.3-21-17zm123.8-505.7c0-.1-4.9-9.4-7-14.2-.1-.3-.3-1.1-.4-1.6-.1-.4-.3-.7-.6-.9-.3-.2-.6-.1-.8.1l-13.1 12.3c-.2.2-.3.5-.4.8 0 .3 0 .7.2 1 .1.1 1.4 2.5 2.1 3.6 2.4 3.7 6.5 12.1 6.5 12.2.2.3.4.5.7.6.3 0 .5-.1.7-.3 0 0 1.8-2.5 2.7-3.6 1.5-1.6 3-3.2 4.6-4.7 1.2-1.2 1.6-1.4 2.1-1.6.5-.3 1.1-.5 2.5-1.9.4-.5.5-1.3.2-1.8zM33 770.3c0-.7-.5-1.2-1.2-1.2-.1 0-.3 0-.4.1-1.6.2-14.3.1-22.2 0-.3 0-.6.1-.9.4-.2.2-.4.5-.4.9 0 .2 0 4.9.1 5.9l.4 13.6c0 .3.2.6.4.9.2.2.5.3.8.3h.1c7.3-.7 14.7-.9 22-.6.3 0 .7-.1.9-.3.2-.2.4-.6.4-.9-.1-6.1-.1-13.2 0-19.1z' style='&%2310;'/%3E%3Cpath fill='%23fee272' d='M171.1 383.4c1.3-2.5 14.3-22 15.6-21.6.8.3 11.5 21.2 11.5 22.1-.1.3-20.3.1-27.1-.5zm425.3 328.4c-.1-.1-6.7-8.2-9.7-12.5-.2-.3-.5-1-.7-1.5-.2-.4-.4-.7-.7-.8-.3-.1-.6 0-.8.3L574 712c-.2.2-.2.5-.2.9 0 .3.2.7.4.9.1.1 1.8 2.2 2.8 3.1 3.1 3.1 8.8 10.5 8.9 10.6.2.3.5.4.8.4.3 0 .5-.2.6-.5 0 0 1.2-2.8 2-4.1 1.1-1.9 2.3-3.7 3.5-5.5.9-1.4 1.3-1.7 1.7-2 .5-.4 1-.7 2.1-2.4.3-.3.2-1.1-.2-1.6zm131.1-531.9c.6.2 1.3-.2 1.4-.8v-.4c.2-1.4 2.8-12.6 4.5-19.5.1-.3 0-.6-.2-.8-.2-.3-.5-.4-.8-.5-.2 0-4.7-1.1-5.7-1.3l-13.4-2.7c-.3-.1-.7 0-.9.2-.2.2-.4.4-.5.6v.1c-.8 6.5-2.2 13.1-3.9 19.4-.1.3 0 .6.2.9.2.3.5.4.8.5 5.8 1.3 12.7 2.9 18.5 4.3zm1-1.8c-.1-.1-.2-.2-.4-.2.2 0 .3.1.4.2z'/%3E%3Cg fill='%23eac5e7'%3E%3Cpath d='M699.6 472.7c-1.5 0-2.8-.8-3.5-2.3-.8-1.9 0-4.2 1.9-5 3.7-1.6 6.8-4.7 8.4-8.5 1.6-3.8 1.7-8.1.2-11.9-.3-.9-.8-1.8-1.2-2.8-.8-1.7-1.8-3.7-2.3-5.9-.9-4.1-.2-8.6 2-12.8 1.7-3.1 4.1-6.1 7.6-9.1 1.6-1.4 4-1.2 5.3.4 1.4 1.6 1.2 4-.4 5.3-2.8 2.5-4.7 4.7-5.9 7-1.4 2.6-1.9 5.3-1.3 7.6.3 1.4 1 2.8 1.7 4.3l1.5 3.3c2.1 5.6 2 12-.3 17.6-2.3 5.5-6.8 10.1-12.3 12.5-.4.2-.9.3-1.4.3zm40.8-51.3c1.5-.2 3 .5 3.8 1.9 1.1 1.8.4 4.2-1.4 5.3-3.7 2.1-6.4 5.6-7.6 9.5-1.2 4-.8 8.4 1.1 12.1.4.9 1 1.7 1.6 2.7 1 1.7 2.2 3.5 3 5.7 1.4 4 1.2 8.7-.6 13.2-1.4 3.4-3.5 6.6-6.8 10.1-1.5 1.6-3.9 1.7-5.5.2-1.6-1.4-1.7-3.9-.2-5.4 2.6-2.8 4.3-5.3 5.3-7.7 1.1-2.8 1.3-5.6.5-7.9-.5-1.3-1.3-2.7-2.2-4.1-.6-1-1.3-2.1-1.9-3.2-2.8-5.4-3.4-11.9-1.7-17.8 1.8-5.9 5.8-11 11.2-14 .4-.4.9-.6 1.4-.6zM261.3 590.9c5.7 6.8 9 15.7 9.4 22.4.5 7.3-2.4 16.4-10.2 20.4-3 1.5-6.7 2.2-11.2 2.2-7.9-.1-12.9-2.9-15.4-8.4-2.1-4.7-2.3-11.4 1.8-15.9 3.2-3.5 7.8-4.1 11.2-1.6 1.2.9 1.5 2.7.6 3.9-.9 1.2-2.7 1.5-3.9.6-1.8-1.3-3.6.6-3.8.8-2.4 2.6-2.1 7-.8 9.9 1.5 3.4 4.7 5 10.4 5.1 3.6 0 6.4-.5 8.6-1.6 4.7-2.4 7.7-8.6 7.2-15-.5-7.3-5.3-18.2-13-23.9-4.2-3.1-8.5-4.1-12.9-3.1-3.1.7-6.2 2.4-9.7 5-6.6 5.1-11.7 11.8-14.2 19-2.7 7.7-2.1 15.8 1.9 23.9.7 1.4.1 3.1-1.3 3.7-1.4.7-3.1.1-3.7-1.3-4.6-9.4-5.4-19.2-2.2-28.2 2.9-8.2 8.6-15.9 16.1-21.6 4.1-3.1 8-5.1 11.8-6 6-1.4 12 0 17.5 4 2.1 1.7 4.1 3.6 5.8 5.7z'/%3E%3Ccircle cx='1013.7' cy='153.9' r='7.1'/%3E%3Ccircle cx='1024.3' cy='132.1' r='7.1'/%3E%3Ccircle cx='1037.3' cy='148.9' r='7.1'/%3E%3Cpath d='M1508.7 297.2c-4.8-5.4-9.7-10.8-14.8-16.2 5.6-5.6 11.1-11.5 15.6-18.2 1.2-1.7.7-4.1-1-5.2-1.7-1.2-4.1-.7-5.2 1-4.2 6.2-9.1 11.6-14.5 16.9-4.8-5-9.7-10-14.7-14.9-1.5-1.5-3.9-1.5-5.3 0-1.5 1.5-1.5 3.9 0 5.3 4.9 4.8 9.7 9.8 14.5 14.8-1.1 1.1-2.3 2.2-3.5 3.2-4.1 3.8-8.4 7.8-12.4 12-1.4 1.5-1.4 3.8 0 5.3 1.5 1.4 3.9 1.4 5.3-.1 3.9-4 8.1-7.9 12.1-11.7 1.2-1.1 2.3-2.2 3.5-3.3 4.9 5.3 9.8 10.6 14.6 15.9l.2.2c1.4 1.4 3.7 1.5 5.2.2 1.7-1.2 1.8-3.6.4-5.2zM327.6 248.6l-.4-2.6c-1.5-11.1-2.2-23.2-2.3-37 0-5.5 0-11.5.2-18.5v-2.3c0-5 0-11.2 3.9-13.5 2.2-1.3 5.1-1 8.5.9 5.7 3.1 13.2 8.7 17.5 14.9 5.5 7.8 7.3 16.9 5 25.7-3.2 12.3-15 31-30 32.1l-2.4.3zm4.5-69.4c-.2 0-.3 0-.4.1-.1.1-.7.5-1.1 2.7-.3 1.9-.3 4.2-.3 6.3v2.4c-.2 6.9-.2 12.8-.2 18.3.1 12.5.7 23.5 2 33.7 11-2.7 20.4-18.1 23-27.8 1.9-7.2.4-14.8-4.2-21.3-3.9-5.5-10.9-10.6-15.9-13.3-1.4-.8-2.4-1.1-2.9-1.1zM516.3 60.8c-.1 0-.2 0-.4-.1-2.4-.7-4-.9-6.7-.7-.7 0-1.3-.5-1.4-1.2 0-.7.5-1.3 1.2-1.4 3.1-.2 4.9 0 7.6.8.7.2 1.1.9.9 1.6-.2.6-.7 1-1.2 1zm-10.2 9.7c-.5 0-1-.3-1.2-.8-.8-2.1-1.2-4.3-1.3-6.6 0-.7.5-1.3 1.2-1.3s1.3.5 1.3 1.2c.1 2 .5 3.9 1.1 5.8.2.7-.1 1.4-.8 1.6 0 .1-.2.1-.3.1zm-12-6.1c-.4 0-.8-.2-1-.5-.4-.6-.3-1.4.2-1.8 1.8-1.4 3.7-2.6 5.8-3.6.6-.3 1.4 0 1.7.6.3.6 0 1.4-.6 1.7-1.9.9-3.7 2-5.3 3.3-.2.2-.5.3-.8.3zm6.4-9.1c-.5 0-.9-.3-1.2-.7-.5-1-1.2-1.9-2.4-3.4-.3-.4-.7-.9-1.1-1.4-.4-.6-.3-1.4.2-1.8.6-.4 1.4-.3 1.8.2.4.5.8 1 1.1 1.4 1.3 1.6 2.1 2.6 2.7 3.9.3.6 0 1.4-.6 1.7-.1.1-.3.1-.5.1zm6.2-.3c-.3 0-.5-.1-.8-.2-.6-.4-.7-1.2-.3-1.8 1.2-1.7 2.3-3.4 3.3-5.2.3-.6 1.1-.9 1.7-.5.6.3.9 1.1.5 1.7-1 1.9-2.2 3.8-3.5 5.6-.2.2-.5.4-.9.4zm522.6 327.8c-.1 0-.2 0-.4-.1-2.4-.7-4-.9-6.7-.7-.7 0-1.3-.5-1.4-1.2 0-.7.5-1.3 1.2-1.4 3.1-.2 4.9 0 7.6.8.7.2 1.1.9.9 1.6-.2.6-.7 1-1.2 1zm-10.2 9.7c-.5 0-1-.3-1.2-.8-.8-2.1-1.2-4.3-1.3-6.6 0-.7.5-1.3 1.2-1.3s1.3.5 1.3 1.2c.1 2 .5 3.9 1.1 5.8.2.7-.1 1.4-.8 1.6 0 .1-.2.1-.3.1zm-12-6.1c-.4 0-.8-.2-1-.5-.4-.6-.3-1.4.2-1.8 1.8-1.4 3.7-2.6 5.8-3.6.6-.3 1.4 0 1.7.6.3.6 0 1.4-.6 1.7-1.9.9-3.7 2-5.3 3.3-.2.2-.5.3-.8.3zm6.4-9.1c-.5 0-.9-.3-1.2-.7-.5-1-1.2-1.9-2.4-3.4-.3-.4-.7-.9-1.1-1.4-.4-.6-.3-1.4.2-1.8.6-.4 1.4-.3 1.8.2.4.5.8 1 1.1 1.4 1.3 1.6 2.1 2.6 2.7 3.9.3.6 0 1.4-.6 1.7-.1.1-.3.1-.5.1zm6.2-.3c-.3 0-.5-.1-.8-.2-.6-.4-.7-1.2-.3-1.8 1.2-1.7 2.3-3.4 3.3-5.2.3-.6 1.1-.9 1.7-.5.6.3.9 1.1.5 1.7-1 1.9-2.2 3.8-3.5 5.6-.2.2-.5.4-.9.4zm310 196.4c-1.4 0-2.9-.2-4.5-.7-8.4-2.7-16.6-12.7-18.7-20-.4-1.4-.7-2.9-.9-4.4-8.1 3.3-15.5 10.6-15.4 21 0 1.5-1.2 2.7-2.7 2.8-1.5 0-2.7-1.2-2.7-2.7-.1-6.7 2.4-12.9 7-18 3.6-4 8.4-7.1 13.7-8.8.5-6.5 3.1-12.9 7.4-17.4 7-7.4 18.2-8.9 27.3-10.1l.7-.1c1.5-.2 2.9.9 3.1 2.3.2 1.5-.9 2.9-2.3 3.1l-.7.1c-8.6 1.2-18.4 2.5-24 8.4-3 3.2-5 7.7-5.7 12.4 7.9-1 17.7 1.3 24.3 5.7 4.3 2.9 7.1 7.8 7.2 12.7.2 4.3-1.7 8.3-5.2 11.1-2.4 1.6-5 2.6-7.9 2.6zm-18.7-26.7c.1 1.5.4 3 .8 4.4 1.7 5.8 8.7 14.2 15.1 16.3 2.8.9 5.1.5 7.2-1.1 2.7-2.1 3.2-4.8 3.1-6.6-.1-3.2-2-6.4-4.8-8.3-5.7-3.9-14.7-5.8-21.4-4.7z'/%3E%3C/g%3E%3C/svg%3E");
    }
    .c-section span:after {
    content: "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae accusamus eaque necessitatibus modi facilis aspernatur ut natus saepe!";
    display: block;
    font-size: 1.4rem;
    position: absolute;
    letter-spacing: 0;
    font-weight: 350;
    padding: 0 var(--s3);
    color: rgba(255, 255, 255, 0.85);
    left: 9px;
    }
    @media (min-width: 40.625em) {
    .c-section span:after {
        font-size: 23%;
    }
    }
    @media (min-width: 40.625em) {
    .c-section span:after {
        width: 47ch;
    }
    }
    @media (min-width: 48em) {
    .c-section span:after {
        width: 57ch;
    }
    }
    @media (min-width: 62em) {
    .c-section span:after {
        width: 67ch;
    }
    }

    .c-services {
    display: grid;
    grid-gap: var(--s2);
    margin: 0 calc(var(--s3) * -1);
    padding: var(--s6) var(--s3);
    position: relative;
    z-index: 1;
    }
    @media (min-width: 40.625em) {
    .c-services {
        grid-template-columns: repeat(7, 1fr);
        grid-template-rows: minmax(100px, 1fr);
    }
    }
    @media (min-width: 40.625em) {
    .c-services {
        padding: 0 var(--s3);
    }
    }
    .c-services:before {
    content: '';
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    background: var(--color-brand-accent-bg);
    width: 100%;
    height: 100%;
    -webkit-transform: skew(0deg, 10deg);
            transform: skew(0deg, 10deg);
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='487' height='243.5' viewBox='0 0 1600 800'%3E%3Cpath fill='%23fdb9a0' d='M1102.5 734.8c2.5-1.2 24.8-8.6 25.6-7.5.5.7-3.9 23.8-4.6 24.5-.2.3-16-12.3-21-17zm123.8-505.7c0-.1-4.9-9.4-7-14.2-.1-.3-.3-1.1-.4-1.6-.1-.4-.3-.7-.6-.9-.3-.2-.6-.1-.8.1l-13.1 12.3c-.2.2-.3.5-.4.8 0 .3 0 .7.2 1 .1.1 1.4 2.5 2.1 3.6 2.4 3.7 6.5 12.1 6.5 12.2.2.3.4.5.7.6.3 0 .5-.1.7-.3 0 0 1.8-2.5 2.7-3.6 1.5-1.6 3-3.2 4.6-4.7 1.2-1.2 1.6-1.4 2.1-1.6.5-.3 1.1-.5 2.5-1.9.4-.5.5-1.3.2-1.8zM33 770.3c0-.7-.5-1.2-1.2-1.2-.1 0-.3 0-.4.1-1.6.2-14.3.1-22.2 0-.3 0-.6.1-.9.4-.2.2-.4.5-.4.9 0 .2 0 4.9.1 5.9l.4 13.6c0 .3.2.6.4.9.2.2.5.3.8.3h.1c7.3-.7 14.7-.9 22-.6.3 0 .7-.1.9-.3.2-.2.4-.6.4-.9-.1-6.1-.1-13.2 0-19.1z' style='&%2310;'/%3E%3Cpath fill='%23fee272' d='M171.1 383.4c1.3-2.5 14.3-22 15.6-21.6.8.3 11.5 21.2 11.5 22.1-.1.3-20.3.1-27.1-.5zm425.3 328.4c-.1-.1-6.7-8.2-9.7-12.5-.2-.3-.5-1-.7-1.5-.2-.4-.4-.7-.7-.8-.3-.1-.6 0-.8.3L574 712c-.2.2-.2.5-.2.9 0 .3.2.7.4.9.1.1 1.8 2.2 2.8 3.1 3.1 3.1 8.8 10.5 8.9 10.6.2.3.5.4.8.4.3 0 .5-.2.6-.5 0 0 1.2-2.8 2-4.1 1.1-1.9 2.3-3.7 3.5-5.5.9-1.4 1.3-1.7 1.7-2 .5-.4 1-.7 2.1-2.4.3-.3.2-1.1-.2-1.6zm131.1-531.9c.6.2 1.3-.2 1.4-.8v-.4c.2-1.4 2.8-12.6 4.5-19.5.1-.3 0-.6-.2-.8-.2-.3-.5-.4-.8-.5-.2 0-4.7-1.1-5.7-1.3l-13.4-2.7c-.3-.1-.7 0-.9.2-.2.2-.4.4-.5.6v.1c-.8 6.5-2.2 13.1-3.9 19.4-.1.3 0 .6.2.9.2.3.5.4.8.5 5.8 1.3 12.7 2.9 18.5 4.3zm1-1.8c-.1-.1-.2-.2-.4-.2.2 0 .3.1.4.2z'/%3E%3Cg fill='%23eac5e7'%3E%3Cpath d='M699.6 472.7c-1.5 0-2.8-.8-3.5-2.3-.8-1.9 0-4.2 1.9-5 3.7-1.6 6.8-4.7 8.4-8.5 1.6-3.8 1.7-8.1.2-11.9-.3-.9-.8-1.8-1.2-2.8-.8-1.7-1.8-3.7-2.3-5.9-.9-4.1-.2-8.6 2-12.8 1.7-3.1 4.1-6.1 7.6-9.1 1.6-1.4 4-1.2 5.3.4 1.4 1.6 1.2 4-.4 5.3-2.8 2.5-4.7 4.7-5.9 7-1.4 2.6-1.9 5.3-1.3 7.6.3 1.4 1 2.8 1.7 4.3l1.5 3.3c2.1 5.6 2 12-.3 17.6-2.3 5.5-6.8 10.1-12.3 12.5-.4.2-.9.3-1.4.3zm40.8-51.3c1.5-.2 3 .5 3.8 1.9 1.1 1.8.4 4.2-1.4 5.3-3.7 2.1-6.4 5.6-7.6 9.5-1.2 4-.8 8.4 1.1 12.1.4.9 1 1.7 1.6 2.7 1 1.7 2.2 3.5 3 5.7 1.4 4 1.2 8.7-.6 13.2-1.4 3.4-3.5 6.6-6.8 10.1-1.5 1.6-3.9 1.7-5.5.2-1.6-1.4-1.7-3.9-.2-5.4 2.6-2.8 4.3-5.3 5.3-7.7 1.1-2.8 1.3-5.6.5-7.9-.5-1.3-1.3-2.7-2.2-4.1-.6-1-1.3-2.1-1.9-3.2-2.8-5.4-3.4-11.9-1.7-17.8 1.8-5.9 5.8-11 11.2-14 .4-.4.9-.6 1.4-.6zM261.3 590.9c5.7 6.8 9 15.7 9.4 22.4.5 7.3-2.4 16.4-10.2 20.4-3 1.5-6.7 2.2-11.2 2.2-7.9-.1-12.9-2.9-15.4-8.4-2.1-4.7-2.3-11.4 1.8-15.9 3.2-3.5 7.8-4.1 11.2-1.6 1.2.9 1.5 2.7.6 3.9-.9 1.2-2.7 1.5-3.9.6-1.8-1.3-3.6.6-3.8.8-2.4 2.6-2.1 7-.8 9.9 1.5 3.4 4.7 5 10.4 5.1 3.6 0 6.4-.5 8.6-1.6 4.7-2.4 7.7-8.6 7.2-15-.5-7.3-5.3-18.2-13-23.9-4.2-3.1-8.5-4.1-12.9-3.1-3.1.7-6.2 2.4-9.7 5-6.6 5.1-11.7 11.8-14.2 19-2.7 7.7-2.1 15.8 1.9 23.9.7 1.4.1 3.1-1.3 3.7-1.4.7-3.1.1-3.7-1.3-4.6-9.4-5.4-19.2-2.2-28.2 2.9-8.2 8.6-15.9 16.1-21.6 4.1-3.1 8-5.1 11.8-6 6-1.4 12 0 17.5 4 2.1 1.7 4.1 3.6 5.8 5.7z'/%3E%3Ccircle cx='1013.7' cy='153.9' r='7.1'/%3E%3Ccircle cx='1024.3' cy='132.1' r='7.1'/%3E%3Ccircle cx='1037.3' cy='148.9' r='7.1'/%3E%3Cpath d='M1508.7 297.2c-4.8-5.4-9.7-10.8-14.8-16.2 5.6-5.6 11.1-11.5 15.6-18.2 1.2-1.7.7-4.1-1-5.2-1.7-1.2-4.1-.7-5.2 1-4.2 6.2-9.1 11.6-14.5 16.9-4.8-5-9.7-10-14.7-14.9-1.5-1.5-3.9-1.5-5.3 0-1.5 1.5-1.5 3.9 0 5.3 4.9 4.8 9.7 9.8 14.5 14.8-1.1 1.1-2.3 2.2-3.5 3.2-4.1 3.8-8.4 7.8-12.4 12-1.4 1.5-1.4 3.8 0 5.3 1.5 1.4 3.9 1.4 5.3-.1 3.9-4 8.1-7.9 12.1-11.7 1.2-1.1 2.3-2.2 3.5-3.3 4.9 5.3 9.8 10.6 14.6 15.9l.2.2c1.4 1.4 3.7 1.5 5.2.2 1.7-1.2 1.8-3.6.4-5.2zM327.6 248.6l-.4-2.6c-1.5-11.1-2.2-23.2-2.3-37 0-5.5 0-11.5.2-18.5v-2.3c0-5 0-11.2 3.9-13.5 2.2-1.3 5.1-1 8.5.9 5.7 3.1 13.2 8.7 17.5 14.9 5.5 7.8 7.3 16.9 5 25.7-3.2 12.3-15 31-30 32.1l-2.4.3zm4.5-69.4c-.2 0-.3 0-.4.1-.1.1-.7.5-1.1 2.7-.3 1.9-.3 4.2-.3 6.3v2.4c-.2 6.9-.2 12.8-.2 18.3.1 12.5.7 23.5 2 33.7 11-2.7 20.4-18.1 23-27.8 1.9-7.2.4-14.8-4.2-21.3-3.9-5.5-10.9-10.6-15.9-13.3-1.4-.8-2.4-1.1-2.9-1.1zM516.3 60.8c-.1 0-.2 0-.4-.1-2.4-.7-4-.9-6.7-.7-.7 0-1.3-.5-1.4-1.2 0-.7.5-1.3 1.2-1.4 3.1-.2 4.9 0 7.6.8.7.2 1.1.9.9 1.6-.2.6-.7 1-1.2 1zm-10.2 9.7c-.5 0-1-.3-1.2-.8-.8-2.1-1.2-4.3-1.3-6.6 0-.7.5-1.3 1.2-1.3s1.3.5 1.3 1.2c.1 2 .5 3.9 1.1 5.8.2.7-.1 1.4-.8 1.6 0 .1-.2.1-.3.1zm-12-6.1c-.4 0-.8-.2-1-.5-.4-.6-.3-1.4.2-1.8 1.8-1.4 3.7-2.6 5.8-3.6.6-.3 1.4 0 1.7.6.3.6 0 1.4-.6 1.7-1.9.9-3.7 2-5.3 3.3-.2.2-.5.3-.8.3zm6.4-9.1c-.5 0-.9-.3-1.2-.7-.5-1-1.2-1.9-2.4-3.4-.3-.4-.7-.9-1.1-1.4-.4-.6-.3-1.4.2-1.8.6-.4 1.4-.3 1.8.2.4.5.8 1 1.1 1.4 1.3 1.6 2.1 2.6 2.7 3.9.3.6 0 1.4-.6 1.7-.1.1-.3.1-.5.1zm6.2-.3c-.3 0-.5-.1-.8-.2-.6-.4-.7-1.2-.3-1.8 1.2-1.7 2.3-3.4 3.3-5.2.3-.6 1.1-.9 1.7-.5.6.3.9 1.1.5 1.7-1 1.9-2.2 3.8-3.5 5.6-.2.2-.5.4-.9.4zm522.6 327.8c-.1 0-.2 0-.4-.1-2.4-.7-4-.9-6.7-.7-.7 0-1.3-.5-1.4-1.2 0-.7.5-1.3 1.2-1.4 3.1-.2 4.9 0 7.6.8.7.2 1.1.9.9 1.6-.2.6-.7 1-1.2 1zm-10.2 9.7c-.5 0-1-.3-1.2-.8-.8-2.1-1.2-4.3-1.3-6.6 0-.7.5-1.3 1.2-1.3s1.3.5 1.3 1.2c.1 2 .5 3.9 1.1 5.8.2.7-.1 1.4-.8 1.6 0 .1-.2.1-.3.1zm-12-6.1c-.4 0-.8-.2-1-.5-.4-.6-.3-1.4.2-1.8 1.8-1.4 3.7-2.6 5.8-3.6.6-.3 1.4 0 1.7.6.3.6 0 1.4-.6 1.7-1.9.9-3.7 2-5.3 3.3-.2.2-.5.3-.8.3zm6.4-9.1c-.5 0-.9-.3-1.2-.7-.5-1-1.2-1.9-2.4-3.4-.3-.4-.7-.9-1.1-1.4-.4-.6-.3-1.4.2-1.8.6-.4 1.4-.3 1.8.2.4.5.8 1 1.1 1.4 1.3 1.6 2.1 2.6 2.7 3.9.3.6 0 1.4-.6 1.7-.1.1-.3.1-.5.1zm6.2-.3c-.3 0-.5-.1-.8-.2-.6-.4-.7-1.2-.3-1.8 1.2-1.7 2.3-3.4 3.3-5.2.3-.6 1.1-.9 1.7-.5.6.3.9 1.1.5 1.7-1 1.9-2.2 3.8-3.5 5.6-.2.2-.5.4-.9.4zm310 196.4c-1.4 0-2.9-.2-4.5-.7-8.4-2.7-16.6-12.7-18.7-20-.4-1.4-.7-2.9-.9-4.4-8.1 3.3-15.5 10.6-15.4 21 0 1.5-1.2 2.7-2.7 2.8-1.5 0-2.7-1.2-2.7-2.7-.1-6.7 2.4-12.9 7-18 3.6-4 8.4-7.1 13.7-8.8.5-6.5 3.1-12.9 7.4-17.4 7-7.4 18.2-8.9 27.3-10.1l.7-.1c1.5-.2 2.9.9 3.1 2.3.2 1.5-.9 2.9-2.3 3.1l-.7.1c-8.6 1.2-18.4 2.5-24 8.4-3 3.2-5 7.7-5.7 12.4 7.9-1 17.7 1.3 24.3 5.7 4.3 2.9 7.1 7.8 7.2 12.7.2 4.3-1.7 8.3-5.2 11.1-2.4 1.6-5 2.6-7.9 2.6zm-18.7-26.7c.1 1.5.4 3 .8 4.4 1.7 5.8 8.7 14.2 15.1 16.3 2.8.9 5.1.5 7.2-1.1 2.7-2.1 3.2-4.8 3.1-6.6-.1-3.2-2-6.4-4.8-8.3-5.7-3.9-14.7-5.8-21.4-4.7z'/%3E%3C/g%3E%3C/svg%3E");
    }
    .c-services__item {
    background: #fff;
    padding: calc(var(--s2) - 0.6rem) var(--s1);
    border-radius: 25px;
    box-shadow: 0 7px 20px rgba(100, 28, 2, 0.135);
    -webkit-transition: all 300ms ease, -webkit-transform 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
    transition: all 300ms ease, -webkit-transform 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
    transition: all 300ms ease, transform 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
    transition: all 300ms ease, transform 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275), -webkit-transform 300ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
    position: relative;
    z-index: 1;
    }
    @media (min-width: 40.625em) {
    .c-services__item {
        -webkit-transform: translateY(-85px);
                transform: translateY(-85px);
    }
    }
    @media (min-width: 48em) {
    .c-services__item {
        -webkit-transform: translateY(-130px);
                transform: translateY(-130px);
    }
    }
    @media (min-width: 40.625em) {
    .c-services__item:nth-of-type(1) {
        grid-column: 1 / -1;
        grid-row: 4;
    }
    }
    @media (min-width: 62em) {
    .c-services__item:nth-of-type(1) {
        grid-column: 5 / -1;
        grid-row: 3;
    }
    }
    @media (min-width: 40.625em) {
    .c-services__item:nth-of-type(2) {
        grid-column: 1 / span 3;
        grid-row: 2;
    }
    }
    @media (min-width: 62em) {
    .c-services__item:nth-of-type(2) {
        grid-column: 3 / span 2;
        grid-row: auto;
    }
    }
    @media (min-width: 40.625em) {
    .c-services__item:nth-of-type(3) {
        grid-column: 4 / -1;
    }
    }
    @media (min-width: 62em) {
    .c-services__item:nth-of-type(3) {
        grid-column: 4 / -1;
        grid-row: 2;
    }
    }
    @media (min-width: 40.625em) {
    .c-services__item:nth-of-type(4) {
        grid-column: 1 / span 4;
    }
    }
    @media (min-width: 62em) {
    .c-services__item:nth-of-type(4) {
        grid-column: 1 / span 3;
    }
    }
    @media (min-width: 40.625em) {
    .c-services__item:nth-of-type(5) {
        grid-column: 5 / -1;
    }
    }
    @media (min-width: 62em) {
    .c-services__item:nth-of-type(5) {
        grid-column: 1 / span 4;
    }
    }
    @media (min-width: 40.625em) {
    .c-services__item:nth-of-type(6) {
        grid-column: 1 / span 4;
        grid-row: 1;
    }
    }
    @media (min-width: 62em) {
    .c-services__item:nth-of-type(6) {
        grid-column: 1 / span 2;
        grid-row: 1;
    }
    }
    .c-services__item h3 {
    color: var(--color-brand-primary);
    font-size: var(--s1);
    letter-spacing: -.04em;
    line-height: 1.2;
    }
    .c-services__item:after {
    content: '';
    display: block;
    position: absolute;
    bottom: 0;
    right: 0;
    width: 50px;
    height: 50px;
    border-radius: 25px 0;
    cursor: pointer;
    -webkit-transition: inherit;
    transition: inherit;
    background-color: var(--color-brand-accent);
    background-size: 20px 20px;
    background-repeat: no-repeat;
    background-position: center;
    background-image: url("data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9JzMwMHB4JyB3aWR0aD0nMzAwcHgnICBmaWxsPSIjZmZmZmZmIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGRhdGEtbmFtZT0iTGF5ZXIgMSIgdmlld0JveD0iMCAwIDEwMCAxMDAiIHg9IjBweCIgeT0iMHB4Ij48dGl0bGU+NTI8L3RpdGxlPjxwYXRoIGQ9Ik04MS4zMDMyOSwzOC41MjkzOUExNC4wMTgsMTQuMDE4LDAsMSwwLDYxLjQ3NywxOC43MDY3MUw0Ny4wMDMxNSwzMy4xNzkxNGExNC4wMzAzNywxNC4wMzAzNywwLDAsMCwwLDE5LjgyMTcxLDQuODAxMTMsNC44MDExMywwLDAsMS02Ljc4OTc5LDYuNzg5ODcsMjMuNjQzMjcsMjMuNjQzMjcsMCwwLDEsMC0zMy40MDE0NUw1NC42ODcyMSwxMS45MTY4NEEyMy42MjAzLDIzLjYyMDMsMCwwLDEsODguMDkzMDgsNDUuMzE5MjdMODAuOTIzOCw1Mi40ODcxMWE0LjgwMTE0LDQuODAxMTQsMCwwLDEtNi43ODk4LTYuNzg5ODdaTTExLjkwNzQxLDg4LjA5MzlhMjMuNjUwNTMsMjMuNjUwNTMsMCwwLDAsMzMuNDA1ODYtLjAwMUw1OS43ODY2NCw3My42MjE0N2EyMy42MTU4MywyMy42MTU4MywwLDAsMCwwLTMzLjQwMTQ1LDQuODAxMTQsNC44MDExNCwwLDAsMC02Ljc4OTc5LDYuNzg5ODgsMTQuMDE1MzEsMTQuMDE1MzEsMCwwLDEsMCwxOS44MjI2OEwzOC41MjM0OCw4MS4zMDRBMTQuMDE4LDE0LjAxOCwwLDEsMSwxOC42OTcyLDYxLjQ4MTM1TDI1Ljg2Niw1NC4zMTM1YTQuODAxMTQsNC44MDExNCwwLDAsMC02Ljc4OTgtNi43ODk4N2wtNy4xNjg3OSw3LjE2Nzg1QTIzLjY0NDg5LDIzLjY0NDg5LDAsMCwwLDExLjkwNzQxLDg4LjA5MzlaIj48L3BhdGg+PC9zdmc+");
    }
    .c-services__item p {
    margin-top: var(--s-1);
    font-weight: 400;
    color: hsla(var(--color-brand-primary-h), var(--color-brand-primary-s), var(--color-brand-primary-l), 0.65);
    }
    .c-services__item:hover {
    background-color: var(--color-brand-accent);
    }
    @media (min-width: 40.625em) {
    .c-services__item:hover {
        -webkit-transform: translateY(-93px);
                transform: translateY(-93px);
    }
    }
    @media (min-width: 48em) {
    .c-services__item:hover {
        -webkit-transform: translateY(-138px);
                transform: translateY(-138px);
    }
    }
    .c-services__item:hover h3 {
    color: #fff;
    }
    .c-services__item:hover p {
    color: rgba(255, 255, 255, 0.8);
    }
    .c-services__item:hover:after {
    background-color: #fff;
    background-image: url("data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9JzMwMHB4JyB3aWR0aD0nMzAwcHgnICBmaWxsPSIjZmI2ZjNjIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGRhdGEtbmFtZT0iTGF5ZXIgMSIgdmlld0JveD0iMCAwIDEwMCAxMDAiIHg9IjBweCIgeT0iMHB4Ij48dGl0bGU+NTI8L3RpdGxlPjxwYXRoIGQ9Ik04MS4zMDMyOSwzOC41MjkzOUExNC4wMTgsMTQuMDE4LDAsMSwwLDYxLjQ3NywxOC43MDY3MUw0Ny4wMDMxNSwzMy4xNzkxNGExNC4wMzAzNywxNC4wMzAzNywwLDAsMCwwLDE5LjgyMTcxLDQuODAxMTMsNC44MDExMywwLDAsMS02Ljc4OTc5LDYuNzg5ODcsMjMuNjQzMjcsMjMuNjQzMjcsMCwwLDEsMC0zMy40MDE0NUw1NC42ODcyMSwxMS45MTY4NEEyMy42MjAzLDIzLjYyMDMsMCwwLDEsODguMDkzMDgsNDUuMzE5MjdMODAuOTIzOCw1Mi40ODcxMWE0LjgwMTE0LDQuODAxMTQsMCwwLDEtNi43ODk4LTYuNzg5ODdaTTExLjkwNzQxLDg4LjA5MzlhMjMuNjUwNTMsMjMuNjUwNTMsMCwwLDAsMzMuNDA1ODYtLjAwMUw1OS43ODY2NCw3My42MjE0N2EyMy42MTU4MywyMy42MTU4MywwLDAsMCwwLTMzLjQwMTQ1LDQuODAxMTQsNC44MDExNCwwLDAsMC02Ljc4OTc5LDYuNzg5ODgsMTQuMDE1MzEsMTQuMDE1MzEsMCwwLDEsMCwxOS44MjI2OEwzOC41MjM0OCw4MS4zMDRBMTQuMDE4LDE0LjAxOCwwLDEsMSwxOC42OTcyLDYxLjQ4MTM1TDI1Ljg2Niw1NC4zMTM1YTQuODAxMTQsNC44MDExNCwwLDAsMC02Ljc4OTgtNi43ODk4N2wtNy4xNjg3OSw3LjE2Nzg1QTIzLjY0NDg5LDIzLjY0NDg5LDAsMCwwLDExLjkwNzQxLDg4LjA5MzlaIj48L3BhdGg+PC9zdmc+");
    }


    </style>

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Portfolio</h2>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
             
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up">

         @foreach($images as $img)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{ $img->image  }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="{{ $img->image  }}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"> </a>
            </div>
          </div>
          @endforeach

          
 

        </div>

      </div>
    </section><!-- End Portfolio Section -->
    <section id="testimonial-area">
    <div class="container">
        <div class="row">
          
            <div class="col-md-8 offset-md-2">
                <div class="section-heading text-center">
                    <h5>Testimonial Design </h5>
                    <h2>A Word From Our Customers</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </p>
                </div>
            </div>
         
        </div>
        <div class="testi-wrap">
          
            <div class="client-single active position-1" data-position="position-1">
                <div class="client-img">
                    <img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299" alt="">
                </div>
                <div class="client-comment">
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
                    <span><i class="fa fa-quote-left"></i></span>
                </div>
                <div class="client-info">
                    <h3>Design By</h3>
                    <p><a href="https://manjaygupta.com">Manjay Gupta</a></p>
                </div>
            </div>
          
            <div class="client-single inactive position-2" data-position="position-2">
                <div class="client-img">
                    <img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299" alt="">
                </div>
                <div class="client-comment">
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
                    <span><i class="fa fa-quote-left"></i></span>
                </div>
                <div class="client-info">
                    <h3>Design By</h3>
                    <p><a href="https://manjaygupta.com">Manjay Gupta</a></p>
                </div>
            </div>
        
            <div class="client-single inactive position-3" data-position="position-3">
                <div class="client-img">
                    <img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299" alt="">
                </div>
                <div class="client-comment">
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
                    <span><i class="fa fa-quote-left"></i></span>
                </div>
                <div class="client-info">
                    <h3>Design By</h3>
                    <p><a href="https://manjaygupta.com">Manjay Gupta</a></p>
                </div>
            </div>
           
            <div class="client-single inactive position-4" data-position="position-4">
                <div class="client-img">
                    <img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299" alt="">
                </div>
                <div class="client-comment">
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
                    <span><i class="fa fa-quote-left"></i></span>
                </div>
                <div class="client-info">
                    <h3>Design By</h3>
                    <p><a href="https://manjaygupta.com">Manjay Gupta</a></p>
                </div>
            </div>
          
            <div class="client-single inactive position-5" data-position="position-5">
                <div class="client-img">
                    <img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299" alt="">
                </div>
                <div class="client-comment">
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
                    <span><i class="fa fa-quote-left"></i></span>
                </div>
                <div class="client-info">
                    <h3>Design By</h3>
                    <p><a href="https://manjaygupta.com">Manjay Gupta</a></p>
                </div>
            </div>
          
            <div class="client-single inactive position-6" data-position="position-6">
                <div class="client-img">
                    <img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299" alt="">
                </div>
                <div class="client-comment">
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
                    <span><i class="fa fa-quote-left"></i></span>
                </div>
                <div class="client-info">
                    <h3>Design By</h3>
                    <p><a href="https://manjaygupta.com">Manjay Gupta</a></p>
                </div>
            </div>
          
            <div class="client-single inactive position-7" data-position="position-7">
                <div class="client-img">
                    <img src="https://cdn.dribbble.com/users/2132253/avatars/small/1799e2c9badff08058551384763e284c.jpg?1568268299" width="40px" alt="">
                </div>
                <div class="client-comment">
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </h3>
                    <span><i class="fa fa-quote-left"></i></span>
                </div>
                <div class="client-info">
                    <h3>Design By</h3>
                    <p><a href="https://manjaygupta.com">Manjay Gupta</a></p>
                </div>
            </div>
           
        </div>
    </div>
</section>


    <!-- ======= Our Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Brands</h2>
        </div>

        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">

        @foreach($brands as $brand)
          <div class="col-lg-3 col-md-4 col-6">
            <div class="client-logo">
              <img src="{{ $brand->brand_image  }}" class="img-fluid" alt="">
            </div>
          </div>
          @endforeach

          

        </div>

      </div>
      
    </section><!-- End Our Clients Section -->
    

    @endsection