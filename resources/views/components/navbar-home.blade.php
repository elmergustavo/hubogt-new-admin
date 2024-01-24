<aside x-data="{}"
    x-bind:class="$store.sidebar.isOpen ?
        'fi-sidebar-open w-[--sidebar-width] translate-x-0 shadow-xl ring-1 ring-gray-950\/5 rtl:-translate-x-0 lg:sticky' :
        'w-[--sidebar-width] -translate-x-full rtl:translate-x-full lg:sticky'"
    class="fi-sidebar fixed inset-y-0 start-0 z-30 grid h-screen content-start bg-white transition-all lg:z-0 lg:bg-transparent lg:shadow-none lg:ring-0 lg:transition-none lg:translate-x-0 rtl:lg:-translate-x-0 fi-sidebar-open w-[--sidebar-width] translate-x-0 shadow-xl ring-1 ring-gray-950/5 rtl:-translate-x-0 lg:sticky">
    <div class="overflow-x-clip">
        <header
            class="fi-sidebar-header flex h-16 items-center bg-white px-6 ring-1 ring-gray-950/5 lg:shadow-sm">
            <div>
                <a href="https://demo.filamentphp.com">
                    <!--[if BLOCK]><![endif]-->
                    <div class="fi-logo text-xl font-bold leading-5 tracking-tight text-gray-950">
                        Filament Demo
                    </div>
                    <!--[if ENDBLOCK]><![endif]-->



                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                </a>
            </div>


        </header>
    </div>

    <nav class="fi-sidebar-nav flex flex-col gap-y-7 overflow-y-auto overflow-x-hidden px-6 py-8"
        style="scrollbar-gutter: stable">



        <ul class="-mx-2 flex flex-col gap-y-7">
            <li x-data="{ label: null }" data-group-label="" class="fi-sidebar-group flex flex-col gap-y-1">

                <ul x-show="! ($store.sidebar.groupIsCollapsed(label) &amp;&amp; ($store.sidebar.isOpen || true))"
                    x-collapse.duration.200ms="" class="fi-sidebar-group-items flex flex-col gap-y-1">
                    <li class="fi-sidebar-item">
                        <a href="https://demo.filamentphp.com"
                            x-on:click="window.matchMedia(`(max-width: 1024px)`).matches &amp;&amp; $store.sidebar.close()"
                            class="fi-sidebar-item-button relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 text-sm outline-none transition duration-75 hover:bg-gray-100 focus-visible:bg-gray-100">
                            <!--[if BLOCK]><![endif]--> <svg
                                class="fi-sidebar-item-icon h-6 w-6 text-gray-400"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25">
                                </path>
                            </svg> <!--[if ENDBLOCK]><![endif]-->


                            <span
                                class="fi-sidebar-item-label flex-1 truncate font-medium text-gray-700">
                                Dashboard
                            </span>

                        </a>

                    </li>
                </ul>
            </li>
            <li x-data="{ label: 'Shop' }" data-group-label="Shop" class="fi-sidebar-group flex flex-col gap-y-1">
                <div x-on:click="$store.sidebar.toggleCollapsedGroup(label)"
                    class="flex items-center gap-x-3 px-2 py-2 cursor-pointer">

                    <span
                        class="fi-sidebar-group-label flex-1 text-sm font-medium leading-6 text-gray-500">
                        Shop
                    </span>

                    <!--[if BLOCK]><![endif]--> <button
                        style="--c-300:var(--gray-300);--c-400:var(--gray-400);--c-500:var(--gray-500);--c-600:var(--gray-600);"
                        class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus-visible:ring-2 disabled:pointer-events-none disabled:opacity-70 -m-2 h-9 w-9 fi-color-gray text-gray-400 hover:text-gray-500 focus-visible:ring-primary-600 fi-sidebar-group-collapse-button"
                        title="Shop" type="button" x-bind:aria-expanded="!$store.sidebar.groupIsCollapsed(label)"
                        x-on:click.stop="$store.sidebar.toggleCollapsedGroup(label)"
                        x-bind:class="{ '-rotate-180': $store.sidebar.groupIsCollapsed(label) }" aria-expanded="true">
                        <!--[if BLOCK]><![endif]--> <span class="sr-only">
                            Shop
                        </span>
                        <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]--> <svg class="fi-icon-btn-icon h-5 w-5"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M14.77 12.79a.75.75 0 01-1.06-.02L10 8.832 6.29 12.77a.75.75 0 11-1.08-1.04l4.25-4.5a.75.75 0 011.08 0l4.25 4.5a.75.75 0 01-.02 1.06z"
                                clip-rule="evenodd"></path>
                        </svg> <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    </button>
                    <!--[if ENDBLOCK]><![endif]-->
                </div>

                <ul x-show="! ($store.sidebar.groupIsCollapsed(label) &amp;&amp; ($store.sidebar.isOpen || true))"
                    x-collapse.duration.200ms="" class="fi-sidebar-group-items flex flex-col gap-y-1">
                    <li class="fi-sidebar-item">
                        <a href="https://demo.filamentphp.com/shop/products"
                            x-on:click="window.matchMedia(`(max-width: 1024px)`).matches &amp;&amp; $store.sidebar.close()"
                            class="fi-sidebar-item-button relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 text-sm outline-none transition duration-75 hover:bg-gray-100 focus-visible:bg-gray-100">
                            <!--[if BLOCK]><![endif]--> <svg
                                class="fi-sidebar-item-icon h-6 w-6 text-gray-400"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"></path>
                            </svg> <!--[if ENDBLOCK]><![endif]-->


                            <span
                                class="fi-sidebar-item-label flex-1 truncate font-medium text-gray-700">
                                Products
                            </span>

                            <span>
                                <div style="--c-50:var(--primary-50);--c-400:var(--primary-400);--c-600:var(--primary-600);"
                                    class="fi-badge flex items-center justify-center gap-x-1 rounded-md text-xs font-medium ring-1 ring-inset px-2 min-w-[theme(spacing.6)] py-1 fi-color-custom bg-custom-50 text-custom-600 ring-custom-600/10">
                                    <!--[if BLOCK]><![endif]--> <!--[if BLOCK]><![endif]-->
                                    <!--[if ENDBLOCK]><![endif]-->

                                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                                    <!--[if ENDBLOCK]><![endif]-->

                                    <span class="grid">
                                        <span class="truncate">
                                            27
                                        </span>
                                    </span>

                                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                                </div>
                            </span>
                        </a>

                    </li>
                    <li class="fi-sidebar-item">
                        <a href="https://demo.filamentphp.com/shop/customers"
                            x-on:click="window.matchMedia(`(max-width: 1024px)`).matches &amp;&amp; $store.sidebar.close()"
                            class="fi-sidebar-item-button relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 text-sm outline-none transition duration-75 hover:bg-gray-100 focus-visible:bg-gray-100">
                            <!--[if BLOCK]><![endif]--> <svg
                                class="fi-sidebar-item-icon h-6 w-6 text-gray-400"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z">
                                </path>
                            </svg> <!--[if ENDBLOCK]><![endif]-->


                            <span
                                class="fi-sidebar-item-label flex-1 truncate font-medium text-gray-700">
                                Customers
                            </span>

                        </a>

                    </li>
                    <li class="fi-sidebar-item fi-active fi-sidebar-item-active flex flex-col gap-y-1">
                        <a href="https://demo.filamentphp.com/shop/orders"
                            x-on:click="window.matchMedia(`(max-width: 1024px)`).matches &amp;&amp; $store.sidebar.close()"
                            class="fi-sidebar-item-button relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 text-sm outline-none transition duration-75 hover:bg-gray-100 focus-visible:bg-gray-100 bg-gray-100">
                            <!--[if BLOCK]><![endif]--> <svg
                                class="fi-sidebar-item-icon h-6 w-6 text-primary-600"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z">
                                </path>
                            </svg> <!--[if ENDBLOCK]><![endif]-->


                            <span
                                class="fi-sidebar-item-label flex-1 truncate font-medium text-primary-600">
                                Orders
                            </span>

                            <span>
                                <div style="--c-50:var(--primary-50);--c-400:var(--primary-400);--c-600:var(--primary-600);"
                                    class="fi-badge flex items-center justify-center gap-x-1 rounded-md text-xs font-medium ring-1 ring-inset px-2 min-w-[theme(spacing.6)] py-1 fi-color-custom bg-custom-50 text-custom-600 ring-custom-600/10">
                                    <!--[if BLOCK]><![endif]--> <!--[if BLOCK]><![endif]-->
                                    <!--[if ENDBLOCK]><![endif]-->

                                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                                    <!--[if ENDBLOCK]><![endif]-->

                                    <span class="grid">
                                        <span class="truncate">
                                            185
                                        </span>
                                    </span>

                                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                                </div>
                            </span>
                        </a>

                    </li>
                </ul>
            </li>
            <li x-data="{ label: 'Blog' }" data-group-label="Blog" class="fi-sidebar-group flex flex-col gap-y-1">
                <div x-on:click="$store.sidebar.toggleCollapsedGroup(label)"
                    class="flex items-center gap-x-3 px-2 py-2 cursor-pointer">

                    <span
                        class="fi-sidebar-group-label flex-1 text-sm font-medium leading-6 text-gray-500">
                        Blog
                    </span>

                    <!--[if BLOCK]><![endif]--> <button
                        style="--c-300:var(--gray-300);--c-400:var(--gray-400);--c-500:var(--gray-500);--c-600:var(--gray-600);"
                        class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus-visible:ring-2 disabled:pointer-events-none disabled:opacity-70 -m-2 h-9 w-9 fi-color-gray text-gray-400 hover:text-gray-500 focus-visible:ring-primary-600 fi-sidebar-group-collapse-button"
                        title="Blog" type="button" x-bind:aria-expanded="!$store.sidebar.groupIsCollapsed(label)"
                        x-on:click.stop="$store.sidebar.toggleCollapsedGroup(label)"
                        x-bind:class="{ '-rotate-180': $store.sidebar.groupIsCollapsed(label) }" aria-expanded="true">
                        <!--[if BLOCK]><![endif]--> <span class="sr-only">
                            Blog
                        </span>
                        <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]--> <svg class="fi-icon-btn-icon h-5 w-5"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M14.77 12.79a.75.75 0 01-1.06-.02L10 8.832 6.29 12.77a.75.75 0 11-1.08-1.04l4.25-4.5a.75.75 0 011.08 0l4.25 4.5a.75.75 0 01-.02 1.06z"
                                clip-rule="evenodd"></path>
                        </svg> <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    </button>
                    <!--[if ENDBLOCK]><![endif]-->
                </div>

                <ul x-show="! ($store.sidebar.groupIsCollapsed(label) &amp;&amp; ($store.sidebar.isOpen || true))"
                    x-collapse.duration.200ms="" class="fi-sidebar-group-items flex flex-col gap-y-1">
                    <li class="fi-sidebar-item">
                        <a href="https://demo.filamentphp.com/blog/posts"
                            x-on:click="window.matchMedia(`(max-width: 1024px)`).matches &amp;&amp; $store.sidebar.close()"
                            class="fi-sidebar-item-button relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 text-sm outline-none transition duration-75 hover:bg-gray-100 focus-visible:bg-gray-100">
                            <!--[if BLOCK]><![endif]--> <svg
                                class="fi-sidebar-item-icon h-6 w-6 text-gray-400"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z">
                                </path>
                            </svg> <!--[if ENDBLOCK]><![endif]-->


                            <span
                                class="fi-sidebar-item-label flex-1 truncate font-medium text-gray-700">
                                Posts
                            </span>

                        </a>

                    </li>
                    <li class="fi-sidebar-item">
                        <a href="https://demo.filamentphp.com/blog/categories"
                            x-on:click="window.matchMedia(`(max-width: 1024px)`).matches &amp;&amp; $store.sidebar.close()"
                            class="fi-sidebar-item-button relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 text-sm outline-none transition duration-75 hover:bg-gray-100 focus-visible:bg-gray-100">
                            <!--[if BLOCK]><![endif]--> <svg
                                class="fi-sidebar-item-icon h-6 w-6 text-gray-400"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122">
                                </path>
                            </svg> <!--[if ENDBLOCK]><![endif]-->


                            <span
                                class="fi-sidebar-item-label flex-1 truncate font-medium text-gray-700">
                                Categories
                            </span>

                        </a>

                    </li>
                    <li class="fi-sidebar-item">
                        <a href="https://demo.filamentphp.com/blog/authors"
                            x-on:click="window.matchMedia(`(max-width: 1024px)`).matches &amp;&amp; $store.sidebar.close()"
                            class="fi-sidebar-item-button relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 text-sm outline-none transition duration-75 hover:bg-gray-100 focus-visible:bg-gray-100">
                            <!--[if BLOCK]><![endif]--> <svg
                                class="fi-sidebar-item-icon h-6 w-6 text-gray-400"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z">
                                </path>
                            </svg> <!--[if ENDBLOCK]><![endif]-->


                            <span
                                class="fi-sidebar-item-label flex-1 truncate font-medium text-gray-700">
                                Authors
                            </span>

                        </a>

                    </li>
                    <li class="fi-sidebar-item">
                        <a href="https://demo.filamentphp.com/blog/links"
                            x-on:click="window.matchMedia(`(max-width: 1024px)`).matches &amp;&amp; $store.sidebar.close()"
                            class="fi-sidebar-item-button relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 text-sm outline-none transition duration-75 hover:bg-gray-100 focus-visible:bg-gray-100">
                            <!--[if BLOCK]><![endif]--> <svg
                                class="fi-sidebar-item-icon h-6 w-6 text-gray-400"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244">
                                </path>
                            </svg> <!--[if ENDBLOCK]><![endif]-->


                            <span
                                class="fi-sidebar-item-label flex-1 truncate font-medium text-gray-700">
                                Links
                            </span>

                        </a>

                    </li>
                </ul>
            </li>
        </ul>

        <script>
            var collapsedGroups = JSON.parse(
                localStorage.getItem('collapsedGroups'),
            )

            if (collapsedGroups === null || collapsedGroups === 'null') {
                localStorage.setItem(
                    'collapsedGroups',
                    JSON.stringify([]),
                )
            }

            collapsedGroups = JSON.parse(
                localStorage.getItem('collapsedGroups'),
            )

            document
                .querySelectorAll('.fi-sidebar-group')
                .forEach((group) => {
                    if (
                        !collapsedGroups.includes(group.dataset.groupLabel)
                    ) {
                        return
                    }

                    // Alpine.js loads too slow, so attempt to hide a
                    // collapsed sidebar group earlier.
                    group.querySelector(
                        '.fi-sidebar-group-items',
                    ).style.display = 'none'
                    group
                        .querySelector('.fi-sidebar-group-collapse-button')
                        .classList.add('rotate-180')
                })
        </script>


    </nav>


</aside>
