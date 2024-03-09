<script setup>
import NavBar from '@/components/NavBar.vue'
import SliderSection from '@/components/SliderSection.vue'
import WhySection from '@/components/WhySection.vue'
import FooterSection from '@/components/FooterSection.vue'
import ContactSection from "@/components/ContactSection.vue"
import CommentSection from "@/components/CommentSection.vue"
import AboutSection from "@/components/AboutSection.vue"
</script>

<template>
  <NavBar />
  <SliderSection />
  <WhySection />
  <AboutSection/>
  <CommentSection/>
  <ContactSection/>
  <slot></slot>
  <FooterSection/>
</template>
