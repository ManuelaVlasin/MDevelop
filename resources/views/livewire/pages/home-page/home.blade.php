<div>
    <section class="parallax-section" id="hero">
        <div class="hero container">
            <div style="padding-top: 50px">
                <h1>{{__('Fă primul pas spre')}}<span></span></h1>
                <h1>{{__('LIBERTATEA ta')}}<span></span></h1>
                <h1>{{__('FINANCIARĂ ')}}<span></span></h1>
                <a href="#home" type="button" class="cta">{{__('Explorează')}}</a>
            </div>
        </div>
    </section>

    <main class="l-main mt-5">
        <!--========== HOME ==========-->
        <section class="home" id="home">
            <div class="home__container bd-container bd-grid">
                <div class="home__img">
                    <img src="https://hrdailyadvisor.blr.com/app/uploads/sites/3/2019/06/Work-Vacation.jpg" alt="">
                </div>

                <div class="home__data">
                    <h1 style="color: #87CEFA" class="home__title">{{__('LIBERTATE DE ALEGERE!')}}</h1>
                    <h5 class="home__description">{{__('Cum ar fi să te trezești în fiecare dimineață și să
                        fii PROPRIUL TĂU ȘEF, să îți organizezi singur programul așa cum îți dorești și să lucrez din orice colț al lumii ai visat ?')}}</h5>
                    <a href="#share" class="button">{{('Vreau să aflu mai multe!')}}</a>
                </div>
            </div>
        </section>

        <!--========== SHARE ==========-->
        <section class="share section bd-container" id="share">
            <div class="share__container bd-grid">
                <div class="share__data">
                    <h2 class="section-title-center">{{__('DA! Totul este POSIBIL și REALIZABIL')}}</h2>
                    <h5 class="share__description">{{__('Alege să lucrezi SMART, fără presiune și fără constrângeri!
                        Trăiește viața pe care ți-o dorești!')}}</h5>
                    <a href="#to_info" class="button">{{__('Vreau să aflu tot!')}}</a>
                </div>

                <div class="share__img">
                    <img
                        src="https://assets-metrostyle.abs-cbn.com/prod/metrostyle/attachments/a2e7d501-1eda-4490-b4bd-0cf0220594eb_club%20paradise%20palawan6.jpg"
                        alt="">
                </div>
            </div>
        </section>

        <div style="text-align: center; margin-top: 30px" id="to_info">
            <img style="width: 20%" src="{{asset(url('images/dashed-arrow.png'))}}" alt="Dashed Arrow"/>
        </div>

        <!--========== General Info ==========-->
        <section class="bd-container mt-5 text-center" id="general-info">
            <div class="bd-grid mb-4">
                <h1>{{__('Oferă-ți viața pe care o meriți!')}}</h1>
            </div>
            <div class="general-info">
                <p><i>{{__('"Nu am timp deloc pentru mine!"  "Nu mai vreau să mă exploateze nimeni la birou!"  "Când a trecut weekend-ul ?"
                        "Sunt stresat MEREU din cauza banilor, a șefului!"  "Vreau să îmi dau demisia, dar nu știu ce să fac și unde să merg" ')}}</i></p>
                <p class="text-uppercase mt-5 mb-5" style="font-weight: bold">{{__('Te macină mereu aceste gânduri ? Simți că nu poți să găsești portiță de scăpare ?')}}</p>
                <p>{{__('Ai doar o viață și pe aia ți-o petreci muncind.')}} <b>{{__('Lucrezi 24/7.')}}</b>{{__('Fără să te întrebi dacă mai există și altceva. ')}}</p>
                <p class="mt-5 mb-5">{{__('Și DA, EXISTĂ!')}} {{__('Se numește ')}}<b>{{__('PROGRAMARE.')}}</b> {{__('Cu care poți să câștigi mai mulți bani fără să fii stresat din cauza asta,
                        îmbătrânind îngropat în rate și datorii')}}</p>
                <p>{{__('Cu faci asta ? Cunoscând')}} <b>{{__('industria IT')}}</b> {{__('și perfecționându-te în direcția corectă')}}</p>
                <p class="mt-5">{{__('Află')}} <b style="color: #87CEFA">{{__('TOT')}}</b> {{__('ceea ce trebuie să știi despre meseria de programator! Chiar acum!')}}</p>
                <p style="color: #87CEFA"><b>{{__('Fă primul tău pas spre viața pe care o visezi!')}}</b></p>
            </div>
            <a href="#steps" class="button">{{__('Cum pot face asta ?')}}</a>

        </section>

        <div style="text-align: center; margin-top: 30px" id="to_info">
            <img style="width: 20%" src="{{asset(url('images/dashed-arrow.png'))}}" alt="Dashed Arrow"/>
        </div>

        <!--========== STEPS ==========-->
        <section class="step section bd-container" id="steps">
            <h1 class="section-title mb-5 text-center">{{__('Urmând 3 pași simpli')}}</h1>
            <div class="step__container bd-grid">
                <div class="step__data">
                    <img src="{{asset(url('images/accreditation.png'))}}" alt="" class="step__img">
                    <h3 class="step__title">{{__('Acreditează-te în domeniu')}}</h3>
                </div>

                <div class="step__data">
                    <img src="{{asset(url('images/skills.png'))}}" alt="" class="step__img">
                    <h3 class="step__title">{{__('Exersează pentru a deveni cât mai bun')}}</h3>
                </div>

                <div class="step__data">
                    <img src="{{asset(url('images/it-image.png'))}}" alt="" class="step__img">
                    <h3 class="step__title">{{__('Aplica corect ceea ce ai învățat')}}</h3>
                </div>
            </div>
        </section>

        <div style="text-align: center; margin-top: 30px">
            <img style="width: 10%" src="{{asset(url('images/plus-transparent.png'))}}" alt="Plus"/>
        </div>

        <!--========== IMAGE SLIDER ==========-->
        <div id="tranding">
            <div class="image-slider-container">
                <h1 class="text-center section-heading">{{__('Our BESTSELLERS')}}</h1>
            </div>
            <div class="image-slider-container">
                <div class="swiper tranding-slider">
                    <div class="swiper-wrapper">
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="data:image/jpeg;base64,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" alt="Tranding">
                            </div>
                            <div class="tranding-slide-content">
                                <h1 class="food-price">$20</h1>
                                <div class="tranding-slide-content-bottom">
                                    <h2 class="food-name">
                                        Special Pizza
                                    </h2>
                                    <h3 class="food-rating">
                                        <span>4.5</span>
                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="data:image/jpeg;base64,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" alt="Tranding">
                            </div>
                            <div class="tranding-slide-content">
                                <h1 class="food-price">$20</h1>
                                <div class="tranding-slide-content-bottom">
                                    <h2 class="food-name">
                                        Meat Ball
                                    </h2>
                                    <h3 class="food-rating">
                                        <span>4.5</span>
                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgVFhYZGRgZHSQaHBwaHBwhIRwcIRwcGhoaIRocIS4lHh4sIRwhJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHxISHzQrJSs2NDQ0NDQ0NDQ0NDQ2NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NP/AABEIAMIBAwMBIgACEQEDEQH/xAAbAAACAwEBAQAAAAAAAAAAAAADBAECBQAGB//EADsQAAIBAgQDBgUEAQIFBQAAAAECEQAhAxIxQQRRYQUicYGR8BMyobHBQtHh8QZSYiNygqLCFBUWM5L/xAAaAQADAQEBAQAAAAAAAAAAAAAAAQIDBAUG/8QAKBEAAgICAQQCAgIDAQAAAAAAAAECEQMhMQQSQVETIjJhgZFxscEU/9oADAMBAAIRAxEAPwD3yoBEfWpCk8qnL1qUmmzyznSDNcw5CrO5jkaEWOn2/ekDCKN5qJ3qjSRGlSrWimFlla9SV8Iqh1qxM0AXgeFSYFAxX0G9WRgBfUUx2NDEEUs4kzFTIJ/vzqUtoZoHYNljxq6reoIvN58asW2oFZXExBoBU4dxcVzJ7NSrEC9qAKspG9WC2vtUz9aGQZ6UBZe1cy2oaterEiY0NMLImqYrQD+1XLVR7iaBEKbSRbaoL7Cw6VfDcb1LuBYfakT4KlFIvegHEII5bC80V07vLpXGDaZPvegTKOx00muRMw7wBq2K1obzilUxhmNrbdaZLdF/hqDppy5eNGULNjrSTYwcxlYA7+9qMmAQ0XH5pCX6HUFHWgqDRVoN4hK6pmuqTYXHjVg4ECl3aCBr4V2YnxmqOdMM+JNqoW5bUPCxBufSrOyg2NIZUNO9SpjXWoIvNRbn5/3QKgimagveJqF8agYl9IpWMIQJFS+EIoYSb1YOBrrTAuMPS9XNDVovVXBJmiwDE7VCrMRVU0vXAyKAJZ4uahWLRaBVGSTr5VfNt9KLFYQoNiKoupHv61OGMuu9L47rmtrRYNhvvQ1Yk3ttNQMQT7vRJBpoVlSnW1VtHs0RngdKtiIwkBTEKQe7DTMgAGZEXkCxtN4T0aRxuSbS4AKcw09/iqsJ3E72oeJjsHTDCHO8xYwApAOZ4IUmbDUwahydOf38qSafAp45RSbXJzuNjp5VMTp+R4VbCQEwfGKNxBCjMNotz6VSM6Bqh/UNfp0pZ8IkEZYHvc01g8UTqLc+tWOl/rT4JqwGFhW/2jn7mrcPoBGnWfrV8IE/pA5VCHvHaLADSgKoYQ0ZaCpoqmkzeASK6pmupGplFdD6waIBB0+vv2aBJ3gAW+lSvFQY1i/4pnKmGw8ANfTbxqoQ9aujzQ3xIBudaQ9FimgmozFZMSNKErRrfxNutRjYoE3kcuutAweJjmY960zhYuha32rPxMRc02E+dVwWZjC2HPp506FZqtjA2F6G787VXBUajX8+NeZ7R7cdXcEOFzFdAFtaRY6mubPmeJWlZcEpPZ6FeIGfJmII2PLn1FaC4nnXksHj5+HMznAJ1lSdZ5bX50wvEknuvcuSv+1bCR5R6muXD1cpR+y3fBs8UfD0ekxm308aGmLzoCAkAAz40Zky7iOX1ruU1aTe34MXB8rgLmGtQJ11q/xFGoqE01/itCWgwMilGw97TTJsKXR73B86BMKuGIoOK4GgvTCGL0PFHQX5/wA0qBi6lj50MNcqZI0iOn0oxxCD+1WRMwNvXSnYKbWkUVDEAkA6gEwalUNgbVUOQ0R6/iq42IwMnXkd6QnL2WKnkZ6z5XoI4hmITf7+FMDEBETBiKJhKuliRTEA4piFsLzf3pVHByklWGlhr60bicbbT39KqeIXIAxk8r00J0c/EBBNzbSPfsULh8cs0xA8PsaLnBIgSNiNqr8TMbA220pibG1NFQ0JBRloN4BKmoqammbGOHC2ZfPWL61GLxCrZVJtJm1tyKhzaGBnmKWxcGflvM+40p0cVkjiZMCTrp/G1MIBYtEmI+1KPhEQSQNB3bez0oDuZGsgyJ5fmigTNKIkn++tBxOKT5JubwbE84rMftaMRkhmIIEsO7JvryuNrWp8IjgKThlhcFAZRhya0+led1fVqCcVd+14OvDDu2c7LBMW98qpwjCRlNz6D9qpjARHKx8akYeRZZokGZ1i1p5ak6HrQuvj8Pd59Ff+duX6J4ni8jAL3mJ20tuZ2rG7Q7UUko7YZOmUEzMi4IAg+dJcbxWd7GwEWP6YLDSIFvvU8PwGGveVVZ9SzRlXqLbc9Z0rkyZ3N3LRcIVo1eEw8+GDBgEkFRJi24+a/wDVWwYjMO4saG5OugGmvSs1eLTOqSzBjDEzBIDE2mwhTHUa1nYD4+HiNhgu0NlJWTZSTIAvBEHTes8cZRfcnT/4bqCcT13DdoIHAzGCRDNYA8o29dqb4nGKgk6gX6HvD8CvPLncFcVGKTIcLdTp3hGhi8z5bNtxGZBnYjLZj4Gxk84H1rPNkm5KV7DtSVGzg8SgPebQTJNrferHtFWOUMpGXMDzHO3vSvFcR2r3woVyk94rA8iYvbboa0cBgxDYbEn5crWIBgRyOg5bWrqXUZIwt0vRm8cWerTiswt69NjeoGLJjXrSIJgqjCVGp0LeMRHhTSY5QKCAZE22MTEEXru6XqPkiu6r9GGTBJbXAypMx9/2q4Hies0vhqWjukfj3yoivGsius5geI5BiTPnpRC5iATUnCDEQJ6mivhAazNMVMVXCOosdzrJ5VzrJGY67Cm8xgUI4ZLTGgmYFAULZLib7Gft0pxMRVSRpVMdQRHyz5VGAgAIkm9+tMFpi2PxZYhguh0GsezRruLpA5nWhFFBlVJOu9/CrcLiktBBA5GTP8UC87L/ABIF1i8CPvNFRNzQcQQYF9xNMoTAoGuS6URVqi0UCkbxJipqYrqDQwnx8wBMioRIJAOlzbbzqrssZQNB11+9Ltjhe6dTpP3pnBYXiMSZEe/2pf4fS/n6X50TDcbW8felVxcYEWMW1H450cByIY7wkLEme8wmL6ATE28qRzsphEuLgghYPMmLDU9Y0prGwyYM5Z8zaxv0520pfisRFAVBYEmT+rqTqduv2ryeqeNy4d/tndgTrZq4HHK6gkqcQgGFBgtFmAP25zSvEmzKTJjvEkjLOaAJ3kfSkuDwWOG7Ze8rLERMQZnnpatLC474qQ4ExCsdZg7jpXnOCi7R2co8jho6YpV17rgKbiSG7rMFbvKLzNbPFuDhOyyBckqpOgBFuV5jwqE4RlN4KjUhYMny6+fkaaxV7gEsBrM30HdlbTbnqPS8kk5JiXBgcFilsXDewAsyxHeIgtYf7h6+NafauC7OCHIDKhyoAZISDPIWN9PCu4zgRl7kLeTNtDEdf5phcRXfMQFaIUFrhQPlsdzf0FaOabToE6VMS43hGyBkdlA1gwHBgTG412Gp6A3xHdkXMPkbI1/mN8s+Ujy605iEJhkBQQ/zMR3lLTeDpeNufkhjMZgaE5svIxlBE+7UJqS3/A265JbjWRdsOToPmPLxEczTPZPFu7gsxMAsQbWAkadYE7UhxSCyMJBEg+Uz5R/3UfsDAy4neeSe6J3Hzk+FwPKqUO7S5FF7N4IwGZgG11JsQIiB7+9WwcSWQgxK90CxJIMzsRA5SCKV4TjgrMdgADIOVtN9M15jXWn8FHLEMlxcEGLWkwetvKafSJ/I00Vk/BmzwMASdOpvNEdlY6DWJrJxsYG3eERod+oqPjsYsJGhgz5869uKPIlKtG5h4YUftaoMnp4Vm4Zc5gT1i/rTWDisdjVUClYy5FSGjXbnQ0Usf3q+IsSNaTLXsnEiKGpjau+IOoOwiqu5junzFA3QSL3iPdqWxMONDc6dNaHwj95gSOY/urcSwjSY0j+aCG1R2SAQfXc1fBMgXpbEzROgN7ddfA0zwotb60CXI0tFWhLRloN4lq6prqRrR4s4hN59+FW4hAe956WP7edDR1tAidQJ2q7QDmB8R18as82xXExYkyfv7FJ8VxULfX3flRcZ4XW/v3tWLxeMBdpXmRNvOfuKY4q3RucAc3/EYEgdwWkTAEzcG3W00HHylbrALSIEAHnH6TtSnCcf8JkSdR3kOkGIJOhIJPeGxFaPH5Xl0JE7EWne9fPZ5J5XLx4PVglGNC3Z/EOhcHTuxrcd4ekmmJGchf0tnHLUfzQOx8c58hWxnXabG/Kb01x/ClMYgbrB9TP0rNvTNk9USzlhliDEGNzO/L+/CleL4rKMkEnTl59L/emnVhpvrbUdaJh4Ye2Uk+vnSTfNB2ya1yYh4pyuWxk60JnYRbSt/E4cJm7h7u8c9D4Vm8QjTMCKSkm9I55RnHkHi450n3HP3rSeIhI1009+VFxrCIM+5EVfDbpWkVStEt3yZzo8SATFoAJkbmtbgMY4eIFZRnVb3sFbMSSd4J0HOicOBvak8XgFZwVJBJkNIGWNgWIF7HrFa48it3pm+GkN4fCrnDF2DKYIQ62kjnMD7eW7w3GFnUAyABdnYxIUxrG8f1WVhYbriOWUZYEQdR8zHksn7mr4DQ0BZE73vpoNdOhrFy2n69MuTSPTlQ0203m0azaicMCTMA/Tp6UrwyZRlkkkyCxkxaxMbW9Kcw2g212N7172N90EzzJpKT/yMM36dCNo+lUQMWyiB4m/XarO5IB/VGgoaOwJzRHn5VYUhlVINhXM0a0qHZjr/HrvRMtr++lCQX6Oz5rDWk+IkZosT700pvCczVsXCDb0US9ozxigrDyCNI386p8JmJmcpFrkD6U1j8MsXM9DvRsMDLA0AimRQDAYhYN9gT9NKawtKCinTl9qaRKTNIoui0daGgooWpR0RRMV1WrqDSjwnD8NAESD4VRkYkqIjWCfv72rQxHHKB4UH4LkllAjmSoH1pdRkljxOSq/F+zzMUe6SRkcdw76x3RbQQPMafSrcBxeRPlDlLsGUEMsxa0iD960/juoYMqkEQcjKw5aAz7FJ9kYKk4lpUjLO8NIj1+1eLm615cbjNU1T1wepixKMrQLjEwscB8oR4gHlNtTta21YyNiYTlT3gdZ3HX8VpLwbCUVrrY/7otOkxbX+6UxEe6M6NtAJzL0BiPrURqq5RtLbs1eysMpe2srbU7AnxEU12u8ujn9QDeUXPSgdmuCqq8ryNoJ0n/b/VA7c4mWVF3UR5DSPzUX9q8chG19hlcRQpeZXQePLpS+FxbA9xoG8fk8qSx3FkUyF2B1kAn34VylDbvIx/1GR6gAj0862ilWzaMrPRfFGUljOYZSfEEXpDh0GgEzaDel+FxSGCP8rHLI2mwPkfzWg6/Czk6qYHiRb964p/WTSIm7Ypx/DoplSM41G3UUkgk6Dl4n39qNGczJF7mNRrljc1rYfAoFGYQSLCTIPP8APnSeTtSTMficnaMItcD1j9/elN4QAAkzzjz9KDkGYzc7dd/Wj/BJCkE2tbwv5R962b4IjZdsTKkmZIJ9dTPp/wDqm+zOERu85IJBIy2Obn5fflSuUQYBhcua9gGst+s+tPdiYxzPeGC2kQRPdLQbSL2PSrxRfcqRsuRnCdiL3IJHSxIBnnAFPDH/AEtuOn06UhiYMQB3reHr66eFUR4teRp6c6+gh+KPKnJ9zs18BpGhGtxryq+GoudZ2JoPCoWW7WjTz+vjQ3JzCDJ5jaPvVCvyXQSZFvD9qJxDwB7vtVUIknQDn/FExHUi2xvc/amHgEjRfzE1OFxDNoIHvY0XCwAf53oWKuVgBvtP486LDYTFQmDa2njQ+GzRDa8+YqQSCZFqYwxN6TYJWyUSjqKhRRVFQ2bxiSq1dagCiKKEzaKOiuq8V1BpR5F0JHL31rH4nhCxIuekEgelegygaaV53t/iiBlBIXUxafHnRkU3GoNX+zyYtRdsRfhiv6kjcZvd61Oxe0cNB8IsouWLGSSbZdJ31J5dbYHCYZcBmZisE62Hey8jNr8gKZ4bsrDDhiJOwJ3ifP7fWvG6m23HI7a9I9bC62jX4mFz5bAiQR1ymPG8CvB8bxDpiFRKktAm031E6Cvapx+EpyM4MhuUBBEyQYj9m8KznxFdw6kd8945WJYD5V1FhCgte8WqMNx/JWa5PtVGenxcJgWXOQZYDQAAkkNoDuPDetTtbHZ0R0Ri4lGAW4BM5mA0nKKpwWIM64SNZQTANhJXUDmYtsRWs/ApABJhjczow2BJiTpBqpSipKyoRfa0ed4Ds8/DnEUqzHNmuSqrrMSRMRfn1p/C7NJO7DYmIIjrBkGLRvNqbzygKIPhqrMpsYzgADIe8THibDnS5412BZYBZ7CZCgSGGXYjU3/VtNXNtrSEkoluEx8RDkeSpsQQSImBY6QCAYtf1piYgzMoaUzyoufv6UXg+GLZ2vnFpyiczCIIMDLM/TwqUxgEGIijKSQYvBBIInyt0Nc8sbk7SBJSXIxg4rFhlCnxnXyqvE8alxMsZ8o60tj8YQqA5pZRcnW5WdZFhNZvEvBzLlJjcAyI5c+utTHAlLYN60P8GGeFHzTpz2j604JtPQMOY0057a1lcA6hkVlDOVDAgkqFEysADZwdzfW1tp2ifHfbXfYWjpV5o9roXYopbBslpAElgYOxgicvnrTIXIC8HOQFBvIDEAyJiQPqL0sry4GZRMDvaGTYCdST75anE4ZTIrakkkD/AEibcvLw5Vv02KWpy/gH9YORfhEDNLk7x751bEwhmGTQWMc6WXiisAgmfrvMjX+KZRAFkeJ1nnF+dq9iJ47dsZwsFkFyACNZNU+ESe7NvHSq4fFkiGiKZwcWLyJ8qoLTGMLDIEEXPh+aUClWMtGwtr5702nEk6/SlcaR/wA2sjfx8qY5V4BhHUksCFHj+Lj+Ku6kqr3N9I0/NFDsTdzcaR6j+aumDmI5D378KTCr4C4aTTCJVkWiBKTN4xIVauBVgKkLSo2ijgKsBXCrUGkUdXVbLUUFnl/hk2v415n/ACTBMfc8utq9QrtlmK8729jjI1pMVSezxX4MXs5Ri4CsLBXyNkyywVohxEixDWN803pjExRiZwpCIEgsZsYBi+2WQCDeCJ1rD/x53HxsJWUh4KoQSWebCZ7o5nlT3E4D5FzKql+8ByvYtBAvYQQdPTy+px1kv3/s9mHa0mvQzxb5viMrsRZAq2YkiR6SSZsAOlOdncEMZ5AJGESGWdQO8z5SYJliDPLwlJOJTh0WQGeBZbkEhg5NzIuaB2amKmNnKDDWIyZpJBA131ljNLpsSm2ndLyVFK9G0OzvhkhLGFifmBzSykwLG9+thudPisMPgZJbMZ7yiYmxka5YA0vvWPxPaDhcwJyyCzbGBETMC5GgmQKjh+3yg7uUDeIMW8bXP0qX0T+Tub0n/ZrH63+yEwXwsJ2KInJVYGw1ZlMROYtbbyUIdnv8cYi5yskEFcojRndSZBUuZ8uprR4jtBnEwDnBBU2EMFEaX+X6+k8Bwy3GUM0bjTXXkPCtI4Jyu1Xpiey742IiKi942LQw1HeJ7xOWeUDfpSbYZxgneKJ3YURuPmsAYIA9CYFaKcIWmTGZoZtWIUtCjcXO3Kow+FQMyRBRdBsstE8vpoa58mGeKPd58ikmloQxOCWNHy6GDz0YMxMRHLmetKcXw7YThlPcIMh4ktnNhE65fvrpW1i5gALAgmZ1ySZv1t0vvSvF4aYyAush/lbQgXynNqB3pg9PPPHNp3LgMboyMDtZM2YnKSROgicxYxzE7DeedbePxC5UZcpZiO7uCxAABsCTA0gd7XWgcN2GllUXykZiSQZlpMnnHgQPOOKwmOIi5SuVlgwPmFxyzWUX8DW8ezLKkatxktG/w/ZqOkNcghwym4b9QiPDSmeK7RR3uJCdwmN9SPHTwofFcJlwZ+IFzQp/SdRoQZg8uU1m8Dw4ysmbII0AvF5nzNd2OFccHD1uXtXYje4tcNQCVEnTnQsJi0wpI8Oe/wBqS7Plu85m1pufqbCtx+ICjuL42rpSo81O9inD8Lm36T+Ipn4aKDETvbl0mg4AaDTGK/dgQD9fCmNVRfBgwQPelCZyCZN+VX4fENvSIvVgRMtv7iiyrtExm0+opnCSKqg6UwooZrCJKrRQKqooiikdEUSBUxXCpqTRIiKkVNSBTKSOrqtXUijyQJMRpXmu23EsTPWvTZwoCjSsTtvhQ4bnE01pniSPnmBxTYPELiITY3A3zd386dK9pxADWdQHaWiR3JnKYAIzAcz67+b7M4FX4lMNtLkwSNBYSNLxXpuPx0w5dSApTvvIOnyACDIhiNp6mK4OslFSUUrfKPUwSuBldjcMmMJcuXSGRc1iDYkzMQytboKLxbLkAeblnsQGVRIBjde8DzM2FOdhcCBgs8nvkuCsAhCvcE7sJaep3rP/APSO7FmhUUABjckASxgjXfzrb8YpLR2Y40uAfF8e/EYeFhCMFEGbLfvXhpYxBvprf0p8AvYKES2YCcrQZ6ybfmtAcAgJnMx1zMYmRaZPXX2CcXhw2VyWVbDJub2kkQJHs1jKdq0jZR3sG+FPdE5h8qg6jlOzdDU8H2iyNkZYDXWRJIsCQYuZ+1ei7N7O4dcMpxJGQ5QmXNmQhTmEjplqeA4N8PEdGXPgtOJgvJgAnvJYRJG0ajrXQlKvRDaEcXi8FkZw2QooJUWmSABG17T1oLo653IibkiBOoUFjeBPLbqZt2n2XhM2RsNszXhGXvTmjNCiCAdLDzvVF7Nxvh/DXFbuSLpciTAvZo0Ma8xSdSj2y4JdMIXUzfKRluBeCwjbSItekG4bEDxIOGr91D/qA5gAhe7OXmN9a18Lg0fBTGTEOYZVdesCba77c6WxXC/IxlhcTF4kgb7/AHril0rim0yaaDICqwCpggzEC0iNbX67UPhkDlnJhV70jx1zTSmDwzOEbEJRJAAiOeg00gXrQ4vEw2wcitIe4AIJYTBZo0UwQOZvEVvhwxxJrlsTkoRtiXbnEZnwUTLkBLmLySpAYm8yCY6Gd6uhkggxsT9aBwvZhUyZgWk7dKbweHBJGwNzXZii4x2eNnzfLKzY4HDtlax2Jv8A1ypzExwGC2M67Dp76Vl4cyAZnYki0dNKaxcBiysDrqQCYqzNPWgmO5ESLE3j+KKzMVkAA9THl1oeErDbUmD/ABTB4a4mPf8AM0DVnJiHKMw72/KKEmYsTGh6U25EHSpwlmCT/dDLUbYzgiwmjgUJKMgqbOmCLgUVaGKItBvFEipAqIqwoNEdUgVwqwFBSR0V1TXUrLo8UVsIHWb0hx5vewO4vFbXEYYQTBiPIe/3rMx8LNYTe1UeBJUeN4rDGDjLj5M4VpgwJ5bGPGtPEx8LGQoQcpOUA6fNYsQdJEx4RpTnH9nd07mIM/is3srDBYByUdB3rjvqPlfnMWMam9jrzdRjjKpPleTv6KadxkR/jPE4mReGaO6SpUkCDOUXImCTr48qp21wuMr/ABAQSB3ghiWtIBkzYCJETOtC7KwTwuB8Z1LAtdxcsASAYNwZE3/1HxpriO2EXGyZZUFXZps8rmQibEa3naBJob7nr+z1Y8EPwmM+H/xMPKr9wmZkFVObOGgnv2GwnnTPZfZ3Fug7yzc5nXnoTlE5Yv58qvg8UWYFVLFoY5jAgxJykzGt/DXfbOMC2UNAY7Gbm+syNN+lSnDgp93J3Z3AYzL8FyolSFeZZW/SJ/VBJtykdKc7A4fikxHXiSpwmBzGVAkEyQF0Npk63oycXlzCRmUWzEXYgXsb+XOsh+1MRQ0OFJklhckASBJuN4AOp6itu+K2yFFs9Px6ooAVrRMXud5IGutjPKK8zxPFFmYqIBsBawgSpte5isT/ANwbEYj4kywWSZy5hAZpM6A77DStHsvhcbiHgYZVA5VnIFoHzAMb3ESAbNSk3LUUCSXIiHdCcuUs1zHyk21A11161bh+18Id4oQ+uUiwI1sNbzy00r1ODwnwVZWAfGsVnIsw2YkAmZMx5dTWWOCMszoyuSZkz9SBPj4dKSxycab2YZ8yjwZA+LxChS7ATMWEmdTGkC0VrHhUwlRYXLN416mN707wvAqBInzqvFcMWJBAtcRy5xzpwxqL0eVmySkrYN+IQEBhAi1tdqNgBApDASdelKIbmxMwII08AKbxOHECb6866oo4XISUjPDGwt/HhWxhBSZEmOu/KKxUUK0H31p/hsc/KLbzoD1jzpNGsJ+B9sEnffSoZ2vI8BVkeNSalyNqizf/AAUTDuYHvem8NLUDCFNIKTNYRCgUVaoi0VRSR1RRZavFVUVcUGqRMVMVIFdTLokVaqirCgpHV1WrqCqPD4vFMwvp7vU4ThGWZvvY0Hh0YrcRJ+lH4nDi4jS01Wj5/fJTiTmvlMT08Ky8bgg5Vls/6SNq0vjtpljrrXciGgg29aVewi/tZ5z/AOPOoXDV3VCCCVMgnMJBDWMzMW09dziP8YTEOAEczhouYEWhVCopi/MSDFzTOPgGBJiTc6bGPDXz+laBIw0CKxzGC59DAP6QOnK2lHZF+D08OZxVtnkP8q7EdOIc4TIqvkhLjJ3gsgxABMDzvsaaw/8AGsV1R0xVztZ1DFgCRJNxKiw7u02r0HE8P8RAxIDqAo/VIF9/Xy8IR4BHwcFyhIY4gyzPdQKNANjYeQqXjhd0brqnw+DzXF4eOjAOD3oaAsgCJG0i0jYWOomn+yl+KyZYDuCcgkZlU3gG4EESGt+GVwHdSGczmJDKYg5SrKRuCNN125Ut/ifYq4WIcaCCrgwZBiGtMXn81n8SukC6pN0ezTsn4SqqKkADMSo7xAgm1xr5X02twfxFbFLW+Z15f8sep/6qtjcQuOCh7pHy9ZGhB06UiXfDAuQR/qrbhGeTMk78DTMmKnfs4uCf4970u2E0sh+XyiOlKDFzsSDGsgeluWtHXDYLkzyDcWv5c9d6TZyyn3DWGhi1UxwDrHKjYeJ+mDa0ih4mEL8zSRE43HRkoRnIm/8ANMu2m9BbByPbfWaJIXnfc/jlW0Xo86UWmLYo0MEXgEamr4UGCwIA257jTrXYr2AEWPX1o/DKx1jXaqCF2GRJvfry8uVXVaYw8HernC5Vm1R3wg2rB4a00goSpRlWs6OiMQiCiqKGi0ZRSN4okCrAVAFXFUapE1EVIFWAqSkiBVhXRU0FJHRXVNdQUeKTT/p/eo435B72NdXVa8HheBTCOnvcUbgtPP8A8a6upvgmPI+Pf/dXN848PxXV1NcHT4LYfymhPt4/iurqhg+BLC/V509wXyYngv3NdXUII/kcPmbx/wDE0xx//wBa/wDLXV1BUvxZm8N8x98q0eG08zXV1NkRCYX4H5q2KPlrq6pRfgXagdp11dWkTkycMX4fTz/FPcDqPfKurqsjFyjUWrNvXV1Sz0Y8ELV11NdXVkzVBBtRBXV1I1RcVNdXU0Wi1SK6upFIsKmurqCjq6urqQz/2Q==" alt="Tranding">
                            </div>
                            <div class="tranding-slide-content">
                                <h1 class="food-price">$40</h1>
                                <div class="tranding-slide-content-bottom">
                                    <h2 class="food-name">
                                        Burger
                                    </h2>
                                    <h3 class="food-rating">
                                        <span>4.5</span>
                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRjpKAITq9UvDlWIdJbvp9D8D6w8DinhssbQipy6OTXJ6l_aRmkGE_OE35MgdzxK51Cjc&usqp=CAU" alt="Tranding">
                            </div>
                            <div class="tranding-slide-content">
                                <h1 class="food-price">$15</h1>
                                <div class="tranding-slide-content-bottom">
                                    <h2 class="food-name">
                                        Frish Curry
                                    </h2>
                                    <h3 class="food-rating">
                                        <span>4.5</span>
                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQQuxQqE9zeUhclC17RUD8ywzZmn_aMeJswV9qsidbKQUa9d3sNUp5lsoeBgIihtrFtKY&usqp=CAU" alt="Tranding">
                            </div>
                            <div class="tranding-slide-content">
                                <h1 class="food-price">$15</h1>
                                <div class="tranding-slide-content-bottom">
                                    <h2 class="food-name">
                                        Pane Cake
                                    </h2>
                                    <h3 class="food-rating">
                                        <span>4.5</span>
                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="data:image/jpeg;base64,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" alt="Tranding">
                            </div>
                            <div class="tranding-slide-content">
                                <h1 class="food-price">$20</h1>
                                <div class="tranding-slide-content-bottom">
                                    <h2 class="food-name">
                                        Vanilla cake
                                    </h2>
                                    <h3 class="food-rating">
                                        <span>4.5</span>
                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide-end -->
                        <!-- Slide-start -->
                        <div class="swiper-slide tranding-slide">
                            <div class="tranding-slide-img">
                                <img src="data:image/jpeg;base64,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" alt="Tranding">
                            </div>
                            <div class="tranding-slide-content">
                                <h1 class="food-price">$8</h1>
                                <div class="tranding-slide-content-bottom">
                                    <h2 class="food-name">
                                        Straw Cake
                                    </h2>
                                    <h3 class="food-rating">
                                        <span>4.5</span>
                                        <div class="rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <!-- Slide-end -->
                    </div>

                    <div class="tranding-slider-control">
                        <div class="swiper-button-prev slider-arrow">
                            <ion-icon name="arrow-back-outline"></ion-icon>
                        </div>
                        <div class="swiper-button-next slider-arrow">
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </div>
        </div>


        <!--========== CONTACT US ==========-->
        <section class="send section">
            <div class="send__container bd-container bd-grid">
                <div class="send__content">
                    <h2 class="section-title-center send__title">{{__('EȘTI PREGĂTIT SĂ FII LIBER ?')}}</h2>
                    <p class="send__description">{{__('Contactează-ne pentru o ședință gratuită de consultanță')}}</p>
                    <form action="">
                        <div class="send__direction">
                            <input type="email" placeholder="Email" class="send__input">
                            <a href="#" class="button">{{__('Trimite')}}</a>
                        </div>
                    </form>
                </div>

                <div class="send__img">
                    <img src="https://images.squarespace-cdn.com/content/v1/55463e35e4b04bf77e438ac0/1434138150015-7ODDDRKOA5ER19SHAP9V/top+of+the+mountain.jpg?format=2500w" alt="">
                </div>
            </div>
        </section>
    </main>
</div>

<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
<!--========== SCROLL REVEAL ==========-->
<script src="https://unpkg.com/scrollreveal"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<style>
    /*===== VARIABLES CSS =====*/
    :root {
        --header-height: 3rem;

        /*========== Colors ==========*/
        --first-color: #87CEFA;
        --first-color-alt: #87CEFA;
        --first-color-send: #87CEFA;
        /*--title-color: #161212;*/
        --title-color: #87CEFA;
        --text-color: #5B5757;
        --text-color-light: #8F8A8A;
        --body-color: #FEFBFB;
        --container-color: #FFF;

        /*========== Font and typography ==========*/
        --biggest-font-size: 2rem;
        --h2-font-size: 1.25rem;
        --h3-font-size: 1.125rem;
        --normal-font-size: .938rem;
        --small-font-size: .813rem;

        /*========== Font weight ==========*/
        --font-semi-bold: 600;
        --font-bold: 700;

        /*========== Margenes ==========*/
        --mb-1: .5rem;
        --mb-2: 1rem;
        --mb-3: 1.5rem;
        --mb-4: 2rem;
        --mb-5: 2.5rem;
        --mb-6: 3rem;
        /*========== z index ==========*/

        --z-tooltip: 10;
        --z-fixed: 100;
    }

    .general-info{
        font-size: 25px;
    }

    @media screen and (min-width: 968px) {
        :root {
            --biggest-font-size: 3rem;
            --h2-font-size: 1.75rem;
            --h3-font-size: 1.25rem;
            --normal-font-size: 1rem;
            --small-font-size: .875rem;
        }
    }

    /*========== BASE ==========*/
    html {
        scroll-behavior: smooth;
    }


    h1, h2, h3 {
        font-weight: var(--font-semi-bold);
        color: var(--title-color);
    }


    img {
        max-width: 100%;
        height: auto;
    }

    /*========== CLASS CSS ==========*/
    .section {
        padding: 4rem 0 2rem;
    }

    .section-title-center {
        font-size: var(--h2-font-size);
        color: var(--title-color);
        text-align: center;
        margin-bottom: var(--mb-3);
        line-height: 30px;
    }

    .section-title{
        font-size: var(--biggest-font-size);
        color: var(--title-color);
    }

    /*========== LAYOUT ==========*/
    .l-main {
        overflow: hidden;
    }

    .bd-container {
        max-width: 968px;
        width: calc(100% - 3rem);
        margin-left: var(--mb-3);
        margin-right: var(--mb-3);
    }

    .bd-grid {
        display: grid;
        gap: 1.5rem;
    }

    /*========== HOME ==========*/
    .home__container {
        row-gap: .5rem;
    }

    .home__img {
        width: 280px;
        justify-self: center;
    }

    .home__title {
        font-size: var(--biggest-font-size);
        font-weight: var(--font-bold);
        margin-bottom: var(--mb-2);
    }

    .home__description {
        margin-bottom: var(--mb-3);
        line-height: 30px;
    }

    /*========== BUTTONS ==========*/
    .button {
        display: inline-block;
        background-color: var(--first-color);
        color: #fff;
        padding: 1rem 1.5rem;
        border-radius: 23.5rem;
        font-weight: var(--font-semi-bold);
        transition: .3s;
        font-size: 20px;
    }

    .button:hover {
        background-color: var(--first-color-alt);
    }


    /*========== SHARE ==========*/
    .share__data {
        text-align: center;
    }

    .share__description {
        margin-bottom: var(--mb-2);
        line-height: 30px;
    }

    .share__img {
        width: 280px;
        justify-self: center;
    }

    /*========== DECORATION ==========*/
    .step__container {
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    }

    .step__data {
        text-align: center;
        padding: 1rem 1rem 2rem;
        background-color: var(--container-color);
        box-shadow: 0 2px 6px rgba(65, 11, 16, .15);
        border-radius: 1rem;
    }

    .step__data:hover {
        box-shadow: 0 3px 12px rgba(65, 11, 16, .15);
    }

    .step__img {
        width: 200px;
        height: 180px;
        margin-bottom: 20px;
    }

    .step__title {
        color: black;
        font-size: var(--h3-font-size);
    }


    /*========== SEND EMAIL ==========*/
    .send {
        background-color: var(--first-color-send);
    }

    .send__title, .send__description {
        color: #fff;
    }

    .send__description {
        text-align: center;
        margin-bottom: var(--mb-4);
    }

    .send__direction {
        display: flex;
        justify-content: space-between;
        background-color: #fff;
        padding: .5rem;
        border-radius: .5rem;
    }

    .send__input {
        width: 70%;
        outline: none;
        border: none;
        font-size: var(--normal-font-size);
        font-family: var(--body-font);
    }

    .send__input::placeholder {
        font-family: var(--body-font);
    }

    .send__img {
        width: 280px;
        justify-self: center;
    }

    /*========== MEDIA QUERIES ==========*/

    /* For full-screen images on small screens */
    @media screen and (max-width: 359px) {
        .home__img,
        .share__img,
        .send__img {
            width: 100%;
        }
    }

    @media screen and (min-width: 576px) {
        .home__container,
        .share__container,
        .send__container {
            grid-template-columns: repeat(2, 1fr);
            align-items: center;
        }

        .home__container {
            padding: 5rem 0 0;
        }

        .home__img {
            order: 1;
        }

        .section-title-center,
        .share__data,
        .send__description {
            text-align: initial;
        }

        .home__img,
        .share__img,
        .send__img {
            width: 100%;
        }

        .share__img {
            order: -1;
        }
    }

    @media screen and (min-width: 768px) {
        body {
            margin: 0;
        }

        .section {
            padding-top: 7rem;
        }

        .home__container {
            padding: 7rem 2rem 0;
        }

        .share__container {
            padding: 0 2rem;
        }

        .send {
            background: none;
        }

        .send__container {
            background-color: var(--first-color-send);
            padding: 2rem;
            border-radius: 1.5rem;
        }
    }

    @media screen and (min-width: 968px) {
        .bd-container {
            margin-left: auto;
            margin-right: auto;
        }

        .home__img,
        .share__img,
        .send__img {
            width: 469px;
        }

        .home__container,
        .share__container,
        .send__container {
            column-gap: 5rem;
        }
    }


    /*========== PARALLX - HERO SECTION ==========*/
    .container {
        min-height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .cta {
        display: inline-block;
        padding: 10px 30px;
        color: white;
        background-color: transparent;
        border: 2px solid #87CEFA;
        font-size: 2rem;
        text-transform: uppercase;
        letter-spacing: 0.1rem;
        margin-top: 30px;
        transition: 0.3s ease;
        transition-property: background-color, color;
    }

    .cta:hover {
        color: white;
        background-color: #87CEFA;
    }

    #hero {
        background-image: url('https://wallpapercave.com/wp/wp6116609.jpg');
        background-size: cover;
        background-position: top center;
        position: relative;
        z-index: 1;
        min-height: 650px;
        background-attachment: fixed;
        background-repeat: no-repeat;
    }

    #hero::after {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        background-color: black;
        opacity: 0.3;
        z-index: -1;
    }

    #hero .hero {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 50px;
        justify-content: flex-start;
    }

    #hero h1 {
        display: block;
        width: fit-content;
        font-size: 4rem;
        position: relative;
        color: transparent;
        animation: text_reveal 0.5s ease forwards;
        animation-delay: 1s;
    }

    #hero h1:nth-child(1) {
        animation-delay: 1s;
    }

    #hero h1:nth-child(2) {
        animation-delay: 2s;
    }

    #hero h1:nth-child(3) {
        animation: text_reveal_name 0.5s ease forwards;
        animation-delay: 3s;
    }

    #hero h1 span {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 0;
        background-color: #87CEFA;
        animation: text_reveal_box 1s ease;
        animation-delay: 0.5s;
    }

    #hero h1:nth-child(1) span {
        animation-delay: 0.5s;
    }

    #hero h1:nth-child(2) span {
        animation-delay: 1.5s;
    }

    #hero h1:nth-child(3) span {
        animation-delay: 2.5s;
    }

    /* End Hero Section */


    /* Keyframes */
    @keyframes hamburger_puls {
        0% {
            opacity: 1;
            transform: scale(1);
        }
        100% {
            opacity: 0;
            transform: scale(1.4);
        }
    }

    @keyframes text_reveal_box {
        50% {
            width: 100%;
            left: 0;
        }
        100% {
            width: 0;
            left: 100%;
        }
    }

    @keyframes text_reveal {
        100% {
            color: white;
        }
    }

    @keyframes text_reveal_name {
        100% {
            color: #87CEFA;
            font-weight: 500;
        }
    }

    /* End Keyframes */

    @media only screen and (min-width: 1024px) {
        .cta {
            font-size: 2.5rem;
            padding: 20px 60px;
        }

        #hero h1 {
            font-size: 7rem;
        }
    }

    @media (max-width: 600px) {
        .cta{
            font-size: 1rem;
        }

        #hero h1{
            font-size: 2rem;
        }
    }


    /*==================== IMAGE SLIDER ====================*/

    /*@media (min-width: 1440px) {*/
    /*    html {*/
    /*        zoom: 1.5;*/
    /*    }*/
    /*}*/

    /*@media (min-width: 2560px) {*/
    /*    html {*/
    /*        zoom: 1.7;*/
    /*    }*/
    /*}*/

    /*@media (min-width: 3860px) {*/
    /*    html {*/
    /*        zoom: 2.5;*/
    /*    }*/
    /*}*/

    ::-webkit-scrollbar {
        width: 1.3rem;
    }

    ::-webkit-scrollbar-thumb {
        border-radius: 1rem;
        background: #797979;
        transition: all 0.5s ease-in-out;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #222224;
    }

    ::-webkit-scrollbar-track {
        background: #f9f9f9;
    }

    .image-slider-container {
        max-width: 124rem;
        padding: 0 1rem;
        margin: 0 auto;
    }

    .text-center {
        text-align: center;
    }

    .section-heading {
        font-size: 3rem;
        color: #87CEFA;
        padding: 2rem 0;
    }

    #tranding {
        padding: 4rem 0;
    }

    @media (max-width:1440px) {
        #tranding {
            padding: 7rem 0;
        }
    }

    #tranding .tranding-slider {
        height: 52rem;
        padding: 2rem 0;
        position: relative;
    }

    @media (max-width:500px) {
        #tranding .tranding-slider {
            height: 45rem;
        }
    }

    .tranding-slide {
        width: 37rem;
        height: 42rem;
        position: relative;
    }

    @media (max-width:500px) {
        .tranding-slide {
            width: 28rem !important;
            height: 36rem !important;
        }
        .tranding-slide .tranding-slide-img img {
            width: 28rem !important;
            height: 36rem !important;
        }
    }

    .tranding-slide .tranding-slide-img img {
        width: 37rem;
        height: 42rem;
        border-radius: 2rem;
        object-fit: cover;
    }

    .tranding-slide .tranding-slide-content {
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
    }

    .tranding-slide-content .food-price {
        position: absolute;
        top: 2rem;
        right: 2rem;
        color: #ffffff;
    }

    .tranding-slide-content .tranding-slide-content-bottom {
        position: absolute;
        bottom: 2rem;
        left: 2rem;
        color: #ffffff;
    }

    .food-rating {
        padding-top: 1rem;
        display: flex;
        gap: 1rem;
    }

    .rating ion-icon {
        color: #ec994b;
    }

    .tranding-slider-control {
        position: relative;
        bottom: 2rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .tranding-slider-control .swiper-button-next {
        left: 58% !important;
        transform: translateX(-58%) !important;
    }

    @media (max-width:990px) {
        .tranding-slider-control .swiper-button-next {
            left: 70% !important;
            transform: translateX(-70%) !important;
        }
    }

    @media (max-width:450px) {
        .tranding-slider-control .swiper-button-next {
            left: 80% !important;
            transform: translateX(-80%) !important;
        }
    }

    @media (max-width:990px) {
        .tranding-slider-control .swiper-button-prev {
            left: 30% !important;
            transform: translateX(-30%) !important;
        }
    }

    @media (max-width:450px) {
        .tranding-slider-control .swiper-button-prev {
            left: 20% !important;
            transform: translateX(-20%) !important;
        }
    }

    .tranding-slider-control .slider-arrow {
        background: #ffffff;
        width: 3.5rem;
        height: 3.5rem;
        border-radius: 50%;
        left: 42%;
        transform: translateX(-42%);
        filter: drop-shadow(0px 8px 24px rgba(18, 28, 53, 0.1));
    }

    .tranding-slider-control .slider-arrow ion-icon {
        font-size: 2rem;
        color: #222224;
    }

    .tranding-slider-control .slider-arrow::after {
        content: '';
    }

    .tranding-slider-control .swiper-pagination {
        position: relative;
        width: 15rem;
        bottom: 1rem;
    }

    .food-name{
        color: white;
    }
</style>

<script>
    /*==================== IMAGE SLIDER ====================*/

    var TrandingSlider = new Swiper('.tranding-slider', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        loop: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 2.5,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });


    /*==================== SCROLL SECTIONS ACTIVE LINK ====================*/
    const sections = document.querySelectorAll('section[id]')

    function scrollActive() {
        const scrollY = window.pageYOffset

        sections.forEach(current => {
            const sectionHeight = current.offsetHeight
            const sectionTop = current.offsetTop - 50;
            sectionId = current.getAttribute('id')
        })
    }

    window.addEventListener('scroll', scrollActive)

    /*==================== SHOW SCROLL TOP ====================*/
    function scrollTop() {
        const scrollTop = document.getElementById('scroll-top');
        // When the scroll is higher than 560 viewport height, add the show-scroll class to the a tag with the scroll-top class
        if (this.scrollY >= 560) scrollTop.classList.add('show-scroll'); else scrollTop.classList.remove('show-scroll')
    }

    window.addEventListener('scroll', scrollTop)

    /*==================== SCROLL REVEAL ANIMATION ====================*/
    const sr = ScrollReveal({
        distance: '30px',
        duration: 1800,
        reset: true,
    });

    sr.reveal(`.home__data, .home__img,
           .step__data,
           .accessory__content,
           .footer__content`, {
        origin: 'top',
        interval: 200,
    })

    sr.reveal(`.share__img, .send__content`, {
        origin: 'left'
    })

    sr.reveal(`.share__data, .send__img`, {
        origin: 'right'
    })
</script>
