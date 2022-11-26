import './styles/all.scss'
import gsap from "gsap"
import ScrollTrigger from "gsap/ScrollTrigger"
import TweenMax from "gsap/all"
import { Power2, Elastic, CSSPlugin, Expo } from "gsap/all"
import Swiper from 'swiper/bundle'
import 'swiper/css'

gsap.registerPlugin(ScrollTrigger, TweenMax);

// Swiper
const mainSlider = new Swiper('.main__slider', {
	speed: 600,
	slidesPerView: 1,
	spaceBetween: 0,
	autoplay: {
		delay: 5000,
	},
	breakpoints: {
		0: {
			slidesPerView: 1,
			spaceBetween: 20,
		},
		720: {
			slidesPerView: 1,
			spaceBetween: 60,
			autoplay: false
		}
	},
    pagination: {
        el: '.main__slider-pagination',
      },
});


// Preloader
TweenMax.to('.firts', 1.5, {
	delay: .7,
	height: "0%",
	ease: Expo.easeInOut
})

TweenMax.to('.second', 1.5, {
	delay: .9,
	height: "0%",
	ease: Expo.easeInOut
})

TweenMax.to('.third', 1.5, {
	delay: 1.1,
	height: "0%",
	ease: Expo.easeInOut
})


TweenMax.to('.four', 1.5, {
	delay: 1.3,
	height: "0%",
	ease: Expo.easeInOut
})

TweenMax.to('.five', 1.5, {
	delay: 1.5,
	height: "0%",
	ease: Expo.easeInOut
})


TweenMax.to('.six', 1.5, {
	delay: 1.7,
	height: "0%",
	ease: Expo.easeInOut
})
