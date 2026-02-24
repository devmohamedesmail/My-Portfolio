'use client'
import { useGSAP } from '@gsap/react'
import React from 'react'
import gsap from 'gsap'

export default function Logo() {
 useGSAP(()=>{
    gsap.to('.logo-name',{
        y:-25,
        duration:2,
        ease:'power3.inOut',
        yoyo:true,
        repeat:-1,
        stagger:{
          each:0.5,
          from:'start'
        }
    })
 })
  return (
    <div className='logo flex items-center gap-2'>
        <span className='text-white logo-name'>Mohamed </span>
        <span className='text-orange-600 logo-name'>Esmail</span>
    </div>
  )
}
