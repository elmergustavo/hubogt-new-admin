const h=()=>{document.querySelectorAll("[data-carousel-parent]").forEach(e=>{let n="";if(e.id==="seccion-3"){console.log("first"),Array(9).fill(1).forEach((r,i)=>{n+=`
          <div class="carousel-item border border-transparent xl:w-[320px] lg:w-[330px] md:w-[367px]  w-full h-auto  ">
          <div class="relative h-[340px] w-full grid gap-2 grid-cols-2 grid-rows-2 px-8">
            <img src=" https://placehold.co/200x310" class="w-full h-full object-cover rounded" alt="image" />
            <img src=" https://placehold.co/100x310" class="w-full row-span-2 h-full object-cover rounded"
              alt="image" />
            <img src=" https://placehold.co/200x310" class="w-full h-full object-cover rounded" alt="image" />
          </div>
          <div class="flex gap-3 py-3 items-center mt-10">
            <img src=" https://placehold.co/200x310" class="w-[50px] h-[70px] object-cover rounded" alt="image" />
            <p class="flex-1 text-sm ">
              <span>Tienda ${i+1}</span> <br>
              <span>Tecnología y Accesorios</span>
            </p>
          </div>
        </div>
          `}),e.innerHTML=n;const l=e.parentElement.querySelector("[data-prev-btn]"),a=e.parentElement.querySelector("[data-next-btn]");let t=0;const s=e.querySelector(".carousel-item");a.addEventListener("click",function(){t=t-(s.clientWidth+2);let r=0;window.innerWidth>=1340?r=3:window.innerWidth>=1024?r=2:window.innerWidth>=768&&(r=1),t<=-s.clientWidth*(9-r)+s.clientWidth&&a.classList.add("hidden"),t!==0&&l.classList.remove("hidden"),e.style.transform=`translateX(${t}px)`}),l.addEventListener("click",function(){t+=s.clientWidth+2,t-s.clientWidth>=-s.clientWidth&&l.classList.add("hidden"),t<0&&a.classList.remove("hidden"),e.style.transform=`translateX(${t}px)`})}else{Array(9).fill(1).forEach((i,d)=>{n+=`
          <div class="carousel-item xl:w-[220px] sm:w-[208px] w-full h-auto  ">
                  <div class="relative h-[200px] aspect-square w-full">
                    <img src=" https://placehold.co/300x310" class="w-full h-full object-cover rounded" alt="image" />
                    <button
                      class="w-8  h-8 grid place-items-center rounded-full bg-white absolute top-4 border right-4 z-10 hover:bg-gray-100"><svg
                        xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="1.5"
                          d="M21 8.25c0-2.485-2.099-4.5-4.687-4.5c-1.936 0-3.598 1.126-4.313 2.733c-.715-1.607-2.377-2.733-4.312-2.733C5.098 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12" />
                      </svg></button>
                  </div>
                  <div class="flex gap-4 flex-col pt-3">
                    <h3 class="text-lg ">Item ${d+1}</h3>
                    <!-- start stars  -->
                    <div class="flex items-center justify-start gap-2">
                      <span class="text-sm">4.8</span>
                      <div class="flex items-center">
                        <svg class="w-4 h-4 text-black ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                          fill="currentColor" viewBox="0 0 22 20">
                          <path
                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-black ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                          fill="currentColor" viewBox="0 0 22 20">
                          <path
                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-black ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                          fill="currentColor" viewBox="0 0 22 20">
                          <path
                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-black ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                          fill="currentColor" viewBox="0 0 22 20">
                          <path
                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                          <path
                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                      </div>
                    </div>
                    <!-- end stars  -->
                    <div class="flex xl:gap-8 md:gap-5 gap-3 items-center ">
                      <b class="text-base">Q27.88</b>
                      <span class="text-green-600 text-xs">Q37.17 (25% descuento)</span>
                    </div>
                    <span class="text-sm">by MysticArtByJose</span>
                    <button class="border border-black p-2 mt-2 hover:bg-gray-200 ">Añadir al
                      carrito</button>
                  </div>
                </div>
          `}),e.innerHTML=n;const l=e.parentElement.querySelector("[data-prev-btn]"),a=e.parentElement.querySelector("[data-next-btn]");let t=0;const s=e.querySelector(".carousel-item"),r=35;a.addEventListener("click",function(){t=t-(s.clientWidth+r);let i=0;window.innerWidth>=1340?i=4:window.innerWidth>=1024?i=3:window.innerWidth>=768&&(i=2),t<=-s.clientWidth*(9-i)+s.clientWidth&&a.classList.add("hidden"),t!==0&&l.classList.remove("hidden"),e.style.transform=`translateX(${t}px)`}),l.addEventListener("click",function(){t+=s.clientWidth+r,t-s.clientWidth>=-s.clientWidth&&l.classList.add("hidden"),t<0&&a.classList.remove("hidden"),e.style.transform=`translateX(${t}px)`})}})};h();const m=()=>{const o=document.querySelector("#accordion-collapse-body-1"),e=["Moda Mujer","Moda Hombre","Hogar & Jardín","Salud & Belleza","Coleccionables y Arte","Bolsos","Joyería","Más"];let n="";e.forEach((l,a)=>{n+=`
            <div id="accordion-collapse-categoria-${a}" data-accordion="collapse" class="w-full">
              <h2 id="accordion-collapse-categoria-${a}">
                <button type="button"
                  class="flex items-center justify-between w-full p-5 font-medium text-gray-500 border border-b-0 border-gray-200 gap-3"
                  data-accordion-target="#accordion-categoria-${a}" aria-expanded="false"
                  aria-controls="accordion-categoria-${a}">
                  <span>${l}</span>
                  <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 5 5 1 1 5" />
                  </svg>
                </button>
              </h2>
              <div id="accordion-categoria-${a}" class="hidden p-3"
                aria-labelledby="accordion-collapse-categoria-${a}">
                Content
              </div>
            </div>
          `}),o.innerHTML=n};m();const p=document.getElementById("form-search-navbar"),g=document.getElementById("form-search-navbar-movil");p.addEventListener("submit",o=>{o.preventDefault();const e=Object.fromEntries(new FormData(o.target)).search;document.getElementById("text-search").textContent=e,c()});g.addEventListener("submit",o=>{o.preventDefault();const e=Object.fromEntries(new FormData(o.target)).search;document.getElementById("text-search-movil").textContent+=`(${e})`,c()});const c=()=>{const o=document.getElementById("modal-results"),e={id:o.id,override:!0},n={placement:"bottom-right",closable:!1,backdropClasses:"bg-black/40 fixed inset-0 z-40",onHide:()=>{console.log("modal is hidden")},onShow:()=>{console.log("m  odal is shown")},onToggle:()=>{console.log("modal has been toggled")}},l=new Modal(o,n,e);l.show(),document.querySelector("#btn-modal-results-close").addEventListener("click",()=>{l.hide()})};
