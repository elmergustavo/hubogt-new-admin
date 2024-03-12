<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Search things</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,400;6..12,600;6..12,700&display=swap"
        rel="stylesheet" />

    <style>
        .hidden-scroll {
            scrollbar-width: none;
        }

        .hidden-scroll::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body class="font-['Nunito_Sans']">

    @extends('layouts.app', ['title' => 'Tienda en Linea', 'sub_title' => 'Elements', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])


    @section('content')
        <main class="mt-[5dvh] max-w-7xl mx-auto ">

            <header class="my-5 flex flex-wrap items-center justify-between p-4 lg:hidden block">
                <div class="flex items-center gap-5">
                    <button class="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-7" viewBox="0 0 24 24">
                            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                        </svg>
                    </button>
                    <span class="font-bold text-xl">Resultados</span>
                </div>

                <div class="relative">
                    <button
                        class="border border-black rounded-md flex hover:text-white hover:bg-blue-900  items-center justify-center gap-2 px-2 py-1 transition-all"
                        id="btn-filters-sidebar-mobile">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5" d="m19.5 8.25l-7.5 7.5l-7.5-7.5" />
                        </svg>
                        Filtros
                    </button>
                    <div id="filters-container-mobile"
                        class="hidden h-[300px] absolute  -left-[150px] -bottom-[310px] border border-gray-500  overflow-y-scroll z-30 p-5 rounded shadow-lg shadow-black/50 bg-white">

                    </div>
                    <div class="bg-transparent w-screen h-screen fixed top-0 left-0 z-20 hidden" id="overlay-filter">
                    </div>
                </div>

                <span class="text-gray-500 flex-none w-full pl-12 pt-2">Zapatos (510)</span>
            </header>

            <div class="grid lg:grid-cols-[1fr,4fr] grid-cols-1 gap-12">

                <aside class="min-h-screen lg:flex hidden flex-col gap-7" id="sidebar-filter">
                    <!-- start filtro "categoria" -->

                    <!-- end filtro "categoria" -->

                </aside>

                <section class=" sm:px-5 px-3">
                    <span class="text-2xl font-[600] lg:block hidden">Resultados</span>

                    <div class="mt-5 grid sm:grid-cols-[repeat(auto-fit,minmax(200px,1fr))] grid-cols-2 sm:gap-x-7 gap-x-4 sm:gap-y-14 gap-y-10 place-items-center"
                        id="list-products-container">
                        <!-- start item -->

                        <!-- end item -->
                    </div>
                </section>
            </div>

            <section
                class="flex min-h-[120px] md:justify-end justify-center md:items-end items-center gap-8 max-w-7xl mx-auto md:mt-0 mt-5 md:mb-10 mb-0  pb-0 text-sm">
                <span class="text-blue-950 font-bold">Q - Español</span>
                <span class="text-blue-950 font-bold">Contenido de productos</span>
            </section>
        </main>



        <script src="../utils/categories-navbar.js"></script>
        <script src="../utils/drawer-navbar.js"></script>
        <script src="../utils/search-input-navbar.js"></script>

        <script>
            const generateStars = (amountFilled = 4, value = '4.8', directionValue = 'left') => {

                const starsFilled = Array(amountFilled).fill(`
        <svg xmlns="http://www.w3.org/2000/svg" class="md:${directionValue === 'left' ? 'size-4' : 'size-5'} size-4" viewBox="0 0 16 16"><path fill="#000" fill-rule="evenodd" d="M8 1.75a.75.75 0 0 1 .692.462l1.41 3.393l3.664.293a.75.75 0 0 1 .428 1.317l-2.791 2.39l.853 3.575a.75.75 0 0 1-1.12.814L7.998 12.08l-3.135 1.915a.75.75 0 0 1-1.12-.814l.852-3.574l-2.79-2.39a.75.75 0 0 1 .427-1.318l3.663-.293l1.41-3.393A.75.75 0 0 1 8 1.75" clip-rule="evenodd"/></svg>
        `)

                const starsUnfilled = Array(5 - amountFilled).fill(`
        <svg xmlns="http://www.w3.org/2000/svg" class="md:${directionValue === 'left' ? 'size-4' : 'size-5'} size-4" viewBox="0 0 24 24"><path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345z"/></svg>
        `)

                return `
         <div class="flex  items-center justify-start gap-2 ${directionValue === 'left' ? 'flex-row' : 'flex-row-reverse'}">
              <span class="md:${directionValue === 'left' ? 'text-xs' : 'text-sm'} text-xs">${value}</span>
              <div class="flex items-center">
                ${starsFilled.join(' ')}
                ${starsUnfilled.join(' ')}
              </div>
            </div>
         `
            }

            const sidebarItems = {
                "category": [{
                        label: 'Hogar',
                        totalItems: 100
                    },
                    {
                        label: 'Accesorios',
                        totalItems: 10
                    },
                    {
                        label: 'Electrodomésticos',
                        totalItems: 180
                    },
                    {
                        label: 'Salud',
                        totalItems: 20
                    },
                    {
                        label: 'Arte',
                        totalItems: 15
                    },
                    {
                        label: 'Vehículos',
                        totalItems: 13
                    },
                    {
                        label: 'Computadoras',
                        totalItems: 180
                    },
                ],
                "marcas": [{
                        label: 'Hogar',
                        totalItems: 100
                    },
                    {
                        label: 'Accesorios',
                        totalItems: 10
                    },
                    {
                        label: 'Electrodomésticos',
                        totalItems: 180
                    },
                    {
                        label: 'Salud',
                        totalItems: 20
                    },
                    {
                        label: 'Arte',
                        totalItems: 15
                    },
                    {
                        label: 'Vehículos',
                        totalItems: 13
                    },
                    {
                        label: 'Computadoras',
                        totalItems: 180
                    },
                ],
                "rating": [{
                        label: 5,
                        totalItems: 100
                    },
                    {
                        label: 4,
                        totalItems: 10
                    },
                    {
                        label: 3,
                        totalItems: 180
                    },
                    {
                        label: 2,
                        totalItems: 20
                    },
                    {
                        label: 1,
                        totalItems: 15
                    },
                ]
            }


            const createFilterTemplate = (type = 'desktop') => {
                const sidebarFilters = [{
                        id: 'category',
                        label: 'Categoría'
                    },
                    {
                        id: 'marcas',
                        label: 'Marca'
                    },
                    {
                        id: 'rating',
                        label: 'Valoraciones'
                    },
                ]

                let template = ''

                sidebarFilters.map(({
                    id,
                    label
                }) => {
                    template += `
              <section class="group">
                <input type="checkbox" id="filter-${id}-sidebar-${type}" class="hidden ${id}-${type}">
                <label for="filter-${id}-sidebar-${type}" class="flex items-center justify-between w-full">
                  <span class="text-2xl font-[600]">${label}</span>
                  <svg xmlns="http://www.w3.org/2000/svg"
                    class="size-8 rotate-[180deg] group-has-[.${id}-${type}:checked]:rotate-[0deg] transition-all duration-[.5s] ease-in-out"
                    viewBox="0 0 16 16">
                    <path fill="currentColor" fill-rule="evenodd"
                      d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06"
                      clip-rule="evenodd" />
                  </svg>
                </label>

                <div
                  class="overflow-hidden group-has-[.${id}-${type}:checked]:h-[0px] transition-all duration-[.5s] ease-in-out group/radio flex flex-col gap-2 mt-5"
                  data-filter="${id}">
                ${id !== 'rating' ? '<span id="see-more-${id}" class=" underline my-3 font-semibold text-blue-900 hover:text-blue-950 cursor-pointer w-fit" >Ver más</span>' : ''}
                </div>
              </section>
          `
                })

                return template
            }


            const generateFilterSidebar = () => {

                document.querySelectorAll('[data-filter]').forEach(($filter, indexContainer) => {

                    const key = $filter.dataset.filter
                    let template = ''

                    sidebarItems[key].map(({
                        label,
                        totalItems
                    }, i) => {
                        template += `
              <label for="opt-${key}-${i}-${indexContainer}" class="flex gap-2 items-center w-full group cursor-pointer">
                <input type="radio" name="category-sidebar-${key}}" id="opt-${key}-${i}-${indexContainer}" class="hidden option-radio">
                <div class=" size-[15px] rounded-full block flex-none grid place-items-center bg-white border border-black/50   group-has-[#opt-${key}-${i}-${indexContainer}:checked]/radio:bg-blue-900">
                  <span class="size-[3px] bg-white rounded-full"></span>
                </div>
                ${key === 'rating' ? generateStars(label, label, 'right') : `<span class="text-start">${label}</span>`}
                <span class="flex-1 text-end w-full block text-gray-500">(${totalItems})</span>
              </label>
            `
                    })

                    $filter.innerHTML = template + $filter.innerHTML

                    let totalHeight = $filter.clientHeight || $filter.parentElement.clientHeight * (sidebarItems[
                        key].length + 2)
                    $filter.classList.add(`h-[${totalHeight}px]`)
                })


            }


            const handleFilterButtonMobile = () => {
                document.querySelector('#btn-filters-sidebar-mobile').addEventListener('click', () => {
                    document.querySelector('#filters-container-mobile').classList.toggle('hidden')
                    document.querySelector('#overlay-filter').classList.toggle('hidden')

                    document.querySelectorAll('[data-filter]').forEach($filter => {
                        const key = $filter.dataset.filter
                        let totalHeight = key === 'rating' ?
                            $filter.children[0].clientHeight * (sidebarItems[key].length + 2) :
                            $filter.children[0].clientHeight * (sidebarItems[key].length + 5)

                        $filter.classList.remove('h-[0px]')
                        $filter.classList.add(`h-[${totalHeight}px]`)
                    })
                })

                document.querySelector('#overlay-filter').addEventListener('click', () => {
                    document.querySelector('#filters-container-mobile').classList.add('hidden')
                    document.querySelector('#overlay-filter').classList.add('hidden')
                })
            }

            handleFilterButtonMobile()

            const generateFilter = () => {
                document.querySelector('#sidebar-filter').innerHTML = createFilterTemplate()
                document.querySelector('#filters-container-mobile').innerHTML = createFilterTemplate('mobile')
                generateFilterSidebar()
            }

            generateFilter()





            const carouselInit = () => {

                let template = ''
                const breakPointsWidth = ' lg:!w-full'

                const data = [{
                        title: 'New balance age',
                        img: 'product-1.png',
                        price: '17.17',
                        discount: '15.17'
                    },
                    {
                        title: 'Jeans Buda',
                        img: 'product-2.png',
                        price: '117.17',
                    },
                    {
                        title: 'Buda Mandala Hoodie',
                        img: 'product-3.png',
                        price: '217.17',
                        discount: '155.17'
                    },
                    {
                        title: 'Jeans Buda',
                        img: 'product-4.png',
                        price: '205.17',
                        discount: '22.17'
                    },
                    {
                        title: 'Chaqueta line',
                        img: 'product-5.png',
                        price: '57.17',
                        discount: '65.14'
                    },
                    {
                        title: 'Anillos veranos',
                        img: 'product-1.png',
                        price: '34.17',
                        discount: '5.17'
                    },
                    {
                        title: 'Jeans Buda',
                        img: 'product-2.png',
                        price: '97.17',
                    },
                    {
                        title: 'Chaqueta line',
                        img: 'product-4.png',
                        price: '219.19',
                        discount: '55.17'
                    },
                    {
                        title: 'Buda Mandala Hoodie',
                        img: 'product-3.png',
                        price: '217.17',
                        discount: '155.17'
                    },
                    {
                        title: 'Jeans Buda',
                        img: 'product-4.png',
                        price: '205.17',
                        discount: '22.17'
                    },
                    {
                        title: 'Chaqueta line',
                        img: 'product-5.png',
                        price: '57.17',
                        discount: '65.14'
                    },
                    {
                        title: 'New balance age',
                        img: 'product-1.png',
                        price: '17.17',
                        discount: '15.17'
                    },
                    {
                        title: 'Jeans Buda',
                        img: 'product-2.png',
                        price: '97.17',
                        discount: '15.17'
                    },
                    {
                        title: 'Anillos veranos',
                        img: 'product-1.png',
                        price: '34.17',
                        discount: '5.17'
                    }
                ]

                data.forEach(({
                    discount,
                    img,
                    price,
                    title
                }, i) => {
                    template += `<div class="carousel-item 	h-full flex flex-col w-full">
          <div class="relative    ${breakPointsWidth}">
            <img src="/images/products/${img}" class="w-full h-full aspect-square object-cover rounded" alt="${title}" />
            <button
            data-btn-like
              class="w-8  h-8 grid place-items-center rounded-full bg-white absolute top-4 border right-4 z-10 hover:bg-gray-100"><svg
                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                  stroke-width="1.5"
                  d="M21 8.25c0-2.485-2.099-4.5-4.687-4.5c-1.936 0-3.598 1.126-4.313 2.733c-.715-1.607-2.377-2.733-4.312-2.733C5.098 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12" />
              </svg></button>
          </div>
          <div class="flex gap-2 flex-col pt-3 flex-1 ">
            <h3 class="text-lg flex-1  md:min-h-fit">${title}</h3>
            ${generateStars()}

            <div class="flex md:flex-row flex-col xl:gap-8 md:gap-5 gap-3 md:items-center items-start">
              <b class="text-base">Q${price}</b>
              ${discount ? `<span class="text-green-600 text-base">Q${discount} </span>` : ``}
            </div>
            <span class="text-sm">by MysticArtByJose</span>

          </div>
          </div>`
                })

                document.querySelector('#list-products-container').innerHTML = template
            }
            carouselInit()
        </script>


        <script>
            const categoriesMobile = () => {
                const drawerSelected = document.querySelector('#drawer-category-selected')

                const handleCloseButtonDrawer = () => {
                    const $buttonCloseDrawer = drawerSelected.querySelector('#close-drawer-category-selected')

                    $buttonCloseDrawer.addEventListener('click', () => {
                        drawerSelected.classList.add('translate-y-full')
                        drawerSelected.classList.remove('translate-y-[0]')
                    })

                }

                handleCloseButtonDrawer()

                document.querySelectorAll('#container-categories-mobile button').forEach($btn => {
                    $btn.addEventListener('click', () => {
                        const categorySelected = $btn.id

                        drawerSelected.querySelectorAll('section .category-selected').forEach($e => {
                            $e.classList.add('hidden')
                        })

                        drawerSelected.querySelector('#title-drawer-category-selected').textContent = $btn
                            .textContent

                        drawerSelected.classList.remove('translate-y-full')
                        drawerSelected.classList.add('translate-y-[0]')
                        drawerSelected.querySelector(`#section-${categorySelected}`).classList.remove(
                            'hidden')

                    })
                })
            }
            categoriesMobile()
        </script>

        <script>
            const drawerNavbarMobile = () => {

                const drawerNavbarMobile = document.querySelector('#drawer-navbar-mobile')

                document.querySelector('#btn-drawer-navbar-mobile').addEventListener('click', () => {
                    drawerNavbarMobile.classList.remove('-translate-x-full')
                    drawerNavbarMobile.classList.add('translate-x-0')
                    drawerNavbarMobile.querySelector('.overlay').classList.remove('opacity-0')
                    drawerNavbarMobile.querySelector('.overlay').classList.add('opacity-100')
                })


                drawerNavbarMobile.querySelector('#close-drawer-navbar-mobile').addEventListener('click', () => {

                    drawerNavbarMobile.querySelector('.overlay').classList.add('opacity-0')
                    drawerNavbarMobile.querySelector('.overlay').classList.remove('opacity-100')
                    drawerNavbarMobile.classList.add('-translate-x-full')
                    drawerNavbarMobile.classList.remove('translate-x-0')
                })
            }
            drawerNavbarMobile()
        </script>

        <script>
            //
            const handleFormSubmit = () => {


                const $formSearch = document.getElementById('form-search-navbar');
                const $resultsContainer = $formSearch.querySelector('#results-container');
                const clearBtn = $formSearch.querySelector('#btn-clear')
                const submitBtn = $formSearch.querySelector('#btn-submit')

                const debounce = (fn, delay = 1000) => {
                    let timerId = null;
                    return (...args) => {
                        clearTimeout(timerId);
                        timerId = setTimeout(() => fn(...args), delay);
                    };
                };


                const onInput = debounce(console.log, 500);


                const resetForm = () => {

                    clearBtn.addEventListener('click', () => {
                        $formSearch.reset()
                        $resultsContainer.classList.add('hidden')
                        $formSearch.querySelector('input').focus({
                            preventScroll: true
                        })
                        clearBtn.classList.add('hidden')
                        submitBtn.classList.remove('hidden')
                    })

                }

                resetForm()

                const showResults = () => {

                    const value = $formSearch.querySelector('input').value;
                    const existValue = value.trim().length > 0

                    $resultsContainer.classList[existValue ? 'remove' : 'add']('hidden')

                    onInput(value)

                    let results = ''

                    Array(10).fill('result').forEach((_, i) => {
                        results += `<li><a href="http://localhost:5500/src/home.html" class="group inline-block w-full hover:bg-gray-200 active:bg-gray-300 focus:bg-gray-300 focus-within:bg-gray-300 focus-visible:bg-gray-300">
      <div class="flex items-center justify-between p-2 rounded">
        <span class="flex items-center gap-5">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="m21 21l-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607" />
          </svg>
          ${_} ${i + 1}
        </span>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
          <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
            d="m19.5 19.5l-15-15m0 0v11.25m0-11.25h11.25" />
        </svg>
      </div>
      <hr class="border group-last:border-transparent border-gray-200 group-hover:border-transparent">
    </a></li>`
                    })

                    $resultsContainer.innerHTML = results

                    clearBtn.classList[existValue ? 'remove' : 'add']('hidden')
                    submitBtn.classList[existValue ? 'add' : 'remove']('hidden')

                    const keyboardFocusLink = () => {
                        const enlaces = $resultsContainer.querySelectorAll('ul li a');

                        let index = -1;

                        enlaces.forEach((enlace, i) => {
                            enlace.addEventListener('keydown', function(event) {
                                if (event.key === 'ArrowDown') {
                                    index = (i + 1) % enlaces.length;
                                    enlaces[index].focus();
                                    event.preventDefault();
                                } else if (event.key === 'ArrowUp') {
                                    index = (i - 1 + enlaces.length) % enlaces.length;
                                    enlaces[index].focus();
                                    event.preventDefault();
                                }
                            });
                        });
                    }

                    keyboardFocusLink()
                }


                const searchInput = () => {

                    $formSearch.addEventListener('submit', (e) => {
                        e.preventDefault();

                        // const value = $formSearch.querySelector('input').value;
                        // if (value.trim().length > 0) showResults()
                    });

                    $formSearch.querySelector('input').addEventListener('input', showResults)

                    $formSearch.querySelector('input').addEventListener('blur', () => {
                        if (!$resultsContainer.classList.contains('hidden')) {
                            $resultsContainer.classList.add('hidden')
                        }
                    })
                }

                searchInput()

                const searchInputMobile = () => {
                    const $searchInput = document.getElementById('search-input-mobile')
                    const $resultsContainerMobile = document.querySelector('#results-container-mobile')


                    $searchInput.querySelector('#input-search').addEventListener('input', e => {

                        const existValue = e.target.value.trim().length <= 2
                        $resultsContainerMobile.classList[existValue ? 'add' : 'remove']('hidden')

                        onInput(e.target.value)

                        let results = ''

                        Array(8).fill('result').forEach((_, i) => {
                            results += `<li class="hover:bg-gray-200 active:bg-gray-300 focus:bg-gray-300"><a  tabindex="${i + 1}" href="#" class="group hover:bg-gray-200 active:bg-gray-300 focus:bg-gray-300 ">
      <div class="flex items-center justify-between p-2 rounded">
        <span class="flex items-center gap-5">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
            <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
              d="m21 21l-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607" />
          </svg>
          ${_} ${i + 1}
        </span>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
          <path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
            d="m19.5 19.5l-15-15m0 0v11.25m0-11.25h11.25" />
        </svg>
      </div>
      <hr class="border group-last:border-transparent border-gray-200 group-hover:border-transparent">
    </a></li>`
                        })

                        $resultsContainerMobile.innerHTML = results
                    })

                    document.getElementById('btn-search-input-mobile').addEventListener('click', e => {
                        $searchInput.classList.remove('-translate-x-full')
                        $searchInput.classList.add('translate-none')

                        $searchInput.querySelector('#input-search').focus()
                    })

                    $searchInput.querySelector('button').addEventListener('click', () => {
                        $resultsContainerMobile.classList.add('hidden')
                        $searchInput.classList.add('-translate-x-full')
                        $searchInput.classList.remove('translate-none')
                        $searchInput.querySelector('#input-search').value = ''
                    })
                }
                searchInputMobile()

            }
            handleFormSubmit()
        </script>


        <script>
            const manageLikes = () => {
                const likesNavbar = document.querySelector('#button-like-navbar')
                let productsLiked = []

                const removeProductFromLikeProductsList = (id) => {
                    console.log('removeProductFromLikeProductsList')
                    const existProduct = productsLiked.find(product => product.id === id)

                    if (existProduct) {
                        productsLiked = productsLiked.filter(product => product.id !== id) || []
                    }
                }

                const addLikeProductsList = (newProduct) => {
                    const alreadyExist = productsLiked.find(product => product.id === newProduct.id)

                    if (alreadyExist) {
                        alert('Ya has agregado este producto a tu lista de me gusta')
                        return;
                    }

                    productsLiked.push(newProduct)
                }

                const refreshProductLikedListNavbar = () => {
                    const $listLikes = document.querySelector('#list-likes')
                    let template = ''

                    if (productsLiked.length === 0) {
                        template =
                            '<span class="text-center text-black/50 w-full block z-10">No hay productos que te gusten</span>'
                        $listLikes.innerHTML = template
                    } else {

                        productsLiked.forEach(({
                            title,
                            img,
                            price,
                            id
                        }) => {
                            template += `
        <div class="flex lg:flex-row flex-col xl:gap-8 md:gap-5 gap-3 lg:items-center items-start">
          <img src="${img}" alt="${title}" class="border-gray-300 border size-[70px] rounded object-cover">
          <div class="flex gap-4 flex-col pt-3 text-base">
            <h3 class="text-lg  md:min-h-fit min-h-[50px] line-clamp-2">${title}</h3>
            <span class="text-green-600 line-through text-sm">${price}</span>
          </div>
          <button data-id="${id}" class="button-delete-liked-product  bg-red-500 active:bg-red-500 text-white hover:bg-red-600 p-1 text-sm px-2 rounded-md absolute bottom-2 right-2">Eliminar<button>
        </div>
        `
                        })
                        $listLikes.innerHTML = template

                        document.querySelectorAll('.button-delete-liked-product').forEach($btn => {
                            $btn.addEventListener('click', () => {
                                removeProductFromLikeProductsList($btn.dataset.id)
                                refreshProductLikedListNavbar()
                                updateHearButtonNavbar()

                                document.querySelectorAll(`button[data-id="${$btn.dataset.id}"]`)
                                    .forEach(btnProductLike => {

                                        const svgHeart = btnProductLike.children[0].children[0]
                                        const isLiked = !!svgHeart.classList.contains(
                                            'fill-red-500')
                                        if (isLiked) svgHeart.classList.remove('fill-red-500')

                                    })

                            })
                        })

                    }
                }

                const updateHearButtonNavbar = () => {
                    // update heart button counter in navbar

                    const $listLikes = document.querySelector('#list-likes')

                    if (productsLiked.length > 0) {
                        $listLikes.classList.remove('-bottom-[85px]', 'h-fit')
                        $listLikes.classList.add('-bottom-[405px]', 'h-[400px]')

                        likesNavbar.children[0].classList.add('text-red-500')
                        likesNavbar.children[1].classList.remove('hidden')
                        likesNavbar.children[1].textContent = productsLiked.length > 99 ? '99+' : productsLiked.length

                    } else {
                        likesNavbar.children[0].classList.remove('text-red-500')
                        likesNavbar.children[1].classList.add('hidden')
                        likesNavbar.children[1].textContent = ''

                        $listLikes.classList.add('-bottom-[85px]', 'h-fit')
                        $listLikes.classList.remove('-bottom-[405px]', 'h-[400px]')
                        $listLikes.innerHTML =
                            '<span class="text-center text-black/50 w-full block z-10">No hay productos que te gusten</span>'

                    }
                }

                document.querySelectorAll('.carousel-item [data-btn-like]').forEach($btnLike => {

                    $btnLike.addEventListener('click', () => {
                        const svgHeart = $btnLike.children[0].children[0]

                        const isLiked = !!svgHeart.classList.contains('fill-red-500')

                        // update card like button
                        svgHeart.classList[isLiked ? 'remove' : 'add']('fill-red-500')

                        const id = $btnLike.dataset.id

                        if (isLiked) {
                            // remove from list
                            removeProductFromLikeProductsList(id)

                        } else {
                            // add to list

                            // get product data liked
                            // console.log($btnLike.parentElement.parentElement)
                            const img = $btnLike.parentElement.parentElement.querySelector('.image-product')
                                .src
                            const title = $btnLike.parentElement.parentElement.querySelector(
                                '.title-product').textContent
                            const price = $btnLike.parentElement.parentElement.querySelector(
                                '.price-product').textContent

                            // update product liked list
                            addLikeProductsList({
                                id,
                                img,
                                title,
                                price
                            })
                        }

                        // update UI product liked list
                        refreshProductLikedListNavbar()

                        updateHearButtonNavbar()
                    })
                })


                document.querySelector('#button-like-navbar').addEventListener('click', () => {

                    const listLikes = document.querySelector('#list-likes')
                    listLikes.classList.toggle('hidden')

                    document.querySelector('#overlay-likes').classList.remove('hidden')
                })


                document.querySelector('#overlay-likes').addEventListener('click', (e) => {
                    const $listLikes = document.querySelector('#list-likes')
                    $listLikes.classList.add('hidden')
                    e.target.classList.add('hidden')
                })

            }

            manageLikes()
        </script>

        <script src="../utils/dinamyc-likes.js"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    @endsection


</body>

</html>
