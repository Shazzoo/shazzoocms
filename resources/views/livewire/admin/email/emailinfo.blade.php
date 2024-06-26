<div
    class="min-h-screen antialiased font-normal fi-body fi-panel-admin bg-gray-50 text-gray-950 dark:bg-gray-950 dark:text-white">

    <x-swal />

    <div class="p-5">
        <header class="flex flex-col gap-3 px-6 py-4 fi-section-header">
            <div class="flex items-center gap-3">
                <div class="grid flex-1 gap-y-1">
                    <h3
                        class="text-base font-semibold leading-6 fi-section-header-heading text-gray-950 dark:text-white">
                        Email Configurations
                    </h3>
                </div>
                <a href="{{ route('admin.create.emailconfiguratie') }}"
                    style="--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);"
                    class="fi-btn relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus-visible:ring-2 rounded-lg fi-color-custom fi-btn-color-primary fi-color-primary fi-size-md fi-btn-size-md gap-1.5 px-3 py-2 text-sm inline-grid shadow-sm bg-custom-600 text-white hover:bg-custom-500 focus-visible:ring-custom-500/50 dark:bg-custom-500 dark:hover:bg-custom-400 dark:focus-visible:ring-custom-400/50 fi-ac-action fi-ac-btn-action">
                    <span class="fi-btn-label">
                        New Configuration
                    </span>
                </a>
            </div>
        </header>


        <div
            class="overflow-hidden bg-white divide-y divide-gray-200 shadow-sm fi-ta-ctn rounded-xl ring-1 ring-gray-950/5 dark:divide-white/10 dark:bg-gray-900 dark:ring-white/10">
            <div class="divide-y divide-gray-200 fi-ta-header-ctn dark:divide-white/10">

                <div class="flex items-center justify-between px-4 py-3 fi-ta-header-toolbar gap-x-4 sm:px-6">

                    <div class="flex items-center shrink-0 gap-x-4">
                        <div class="fi-ta-search-field">
                            <div
                                class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white dark:bg-white/5 [&:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 ring-gray-950/10 dark:ring-white/20 [&:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:[&:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500">
                                <div class="flex-1 min-w-0">
                                    <input
                                        class="fi-input block w-full bcategory-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 bg-white/0 ps-0 pe-3"
                                        autocomplete="off" placeholder="Search" type="search" wire:model.live="searchTerm">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="relative overflow-x-auto divide-y divide-gray-200 fi-ta-content dark:divide-white/10 dark:bcategory-t-white/10">
                <table class="w-full divide-y divide-gray-200 table-auto fi-ta-table text-start dark:divide-white/5">
                    <thead class="divide-y divide-gray-200 dark:divide-white/5">
                        <tr class="bg-gray-50 dark:bg-white/5">
                            
                            <th
                                class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 fi-table-header-cell-category.name">
                                <div class="flex items-center justify-start w-full group gap-x-1 whitespace-nowrap">
                                    <span
                                        class="text-sm font-semibold fi-ta-header-cell-label text-gray-950 dark:text-white">
                                        Name
                                    </span>
                                </div>
                            </th>

                            <th
                                class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 fi-table-header-cell-category.name">
                                <div class="flex items-center justify-start w-full group gap-x-1 whitespace-nowrap">
                                    <span
                                        class="text-sm font-semibold fi-ta-header-cell-label text-gray-950 dark:text-white">
                                        Email
                                    </span>
                                </div>
                            </th>
                            <th class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 fi-table-header-cell-category.name">
                                <div class="flex items-center justify-start w-full group gap-x-1 whitespace-nowrap">
                                    <span class="text-sm font-semibold fi-ta-header-cell-label text-gray-950 dark:text-white">
                                        Host
                                    </span>
                                </div>
                            </th>
                            <th class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 fi-table-header-cell-category.name">
                                <div class="flex items-center justify-start w-full group gap-x-1 whitespace-nowrap">
                                    <span class="text-sm font-semibold fi-ta-header-cell-label text-gray-950 dark:text-white">
                                        Port
                                    </span>
                                </div>
                            </th>
                            <th class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 fi-table-header-cell-category.name">
                                <div class="flex items-center justify-start w-full group gap-x-1 whitespace-nowrap">
                                    <span class="text-sm font-semibold fi-ta-header-cell-label text-gray-950 dark:text-white">
                                        Status
                                    </span>
                                </div>
                            </th>
                            <th
                                class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 fi-table-header-cell-created-at">
                                <span class="flex items-center justify-start w-full group gap-x-1 whitespace-nowrap">
                                    <span
                                        class="text-sm font-semibold fi-ta-header-cell-label text-gray-950 dark:text-white">
                                        Actions
                                    </span>
                                </span>
                            </th>
                            <th class="w-1"></th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200 whitespace-nowrap dark:divide-white/5">
                        @foreach ($emailConfigurations as $emailConfiguration)
                        <tr
                            class="fi-ta-row [@media(hover:hover)]:transition [@media(hover:hover)]:duration-75 hover:bg-gray-50 dark:hover:bg-white/5">
                          
                            <td
                                class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-category.name">
                                <div class="fi-ta-col-wrp">
                                    <div class="flex justify-start w-full disabled:pointer-events-none text-start">
                                        <div class="grid w-full px-3 py-4 fi-ta-text gap-y-1">
                                            <div class="flex">
                                                <div class="flex max-w-max" style>
                                                    <div class="fi-ta-text-item inline-flex items-center gap-1.5">
                                                        <span
                                                            class="text-sm leading-6 fi-ta-text-item-label text-gray-950 dark:text-white">
                                                            {{ $emailConfiguration->name_from }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td
                                class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-category.name">
                                <div class="fi-ta-col-wrp">
                                    <div class="flex justify-start w-full disabled:pointer-events-none text-start">
                                        <div class="grid w-full px-3 py-4 fi-ta-text gap-y-1">
                                            <div class="flex">
                                                <div class="flex max-w-max" style>
                                                    <div class="fi-ta-text-item inline-flex items-center gap-1.5">
                                                        <span
                                                            class="text-sm leading-6 fi-ta-text-item-label text-gray-950 dark:text-white">
                                                            {{ $emailConfiguration->email_from }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td
                                class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-category.name">
                                <div class="fi-ta-col-wrp">
                                    <div class="flex justify-start w-full disabled:pointer-events-none text-start">
                                        <div class="grid w-full px-3 py-4 fi-ta-text gap-y-1">
                                            <div class="flex">
                                                <div class="flex max-w-max" style>
                                                    <div class="fi-ta-text-item inline-flex items-center gap-1.5">
                                                        <span class="text-sm leading-6 fi-ta-text-item-label text-gray-950 dark:text-white">
                                                            {{ $emailConfiguration->host }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td
                                class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-category.name">
                                <div class="fi-ta-col-wrp">
                                    <div class="flex justify-start w-full disabled:pointer-events-none text-start">
                                        <div class="grid w-full px-3 py-4 fi-ta-text gap-y-1">
                                            <div class="flex">
                                                <div class="flex max-w-max" style>
                                                    <div class="fi-ta-text-item inline-flex items-center gap-1.5">
                                                        <span class="text-sm leading-6 fi-ta-text-item-label text-gray-950 dark:text-white">
                                                            {{ $emailConfiguration->port }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td
                                class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-category.name">
                                <div class="fi-ta-col-wrp">
                                    <div class="flex justify-start w-full disabled:pointer-events-none text-start">
                                        <div class="grid w-full px-3 py-4 fi-ta-text gap-y-1">
                                            <div class="flex">
                                                <div class="flex max-w-max" style>
                                                    <div class="fi-ta-text-item inline-flex items-center gap-1.5">
                                                        <span class="text-sm leading-6 fi-ta-text-item-label text-gray-950 dark:text-white">
                                                            {{ $emailConfiguration->status }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td
                                class="p-0 fi-ta-cell first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-ta-actions-cell">
                                <div
                                    class="flex flex-wrap items-center gap-3 fi-ta-actions shrink-0 sm:flex-nowrap md:ps-3 ps-3 pe-4 sm:pe-6">
                                    <a href="{{ route('admin.edit.emailconfiguratie', $emailConfiguration->id) }}"
                                        class="relative inline-flex items-center justify-center gap-1 outline-none cursor-pointer fi-link group/link fi-size-sm fi-link-size-sm fi-color-custom fi-color-primary fi-ac-action fi-ac-link-action">
                                        <svg style="--c-400:var(--primary-400);--c-600:var(--primary-600);"
                                            class="w-4 h-4 fi-link-icon text-custom-600 dark:text-custom-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                            aria-hidden="true" data-slot="icon">
                                            <path
                                                d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z">
                                            </path>
                                            <path
                                                d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z">
                                            </path>
                                        </svg>
                                        <span
                                            class="text-sm font-semibold group-hover/link:underline group-focus-visible/link:underline text-custom-600 dark:text-custom-400"
                                            style="--c-400:var(--primary-400);--c-600:var(--primary-600);">
                                            Edit
                                        </span>
                                    </a>






                                        {{-- make the active button --}}
                                    <a wire:click="activeEmailConfiguration({{ $emailConfiguration->id }})"
                                        class="relative inline-flex items-center justify-center gap-1 outline-none cursor-pointer fi-link group/link fi-size-sm fi-link-size-sm fi-color-custom fi-color-primary fi-ac-action fi-ac-link-action">
                                        {{-- svg for active --}}
                                       <svg fill="#34d399" height="30px" width="30px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 493.42 493.42" xml:space="preserve" stroke="#ff0000">
                                    
                                    
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="5" />
                                    
                                        <g id="SVGRepo_iconCarrier">
                                            <g>
                                                <path
                                                    d="M162.988,288.902c3.088-0.828,6.277-1.25,9.479-1.25c2.525,0,5.032,0.26,7.485,0.779 c4.791-14.577,18.526-25.135,34.686-25.135h28.057c7.455,0,14.342,2.323,20.123,6.173c0.725-4.849,2.308-9.575,4.835-13.952 l17.671-30.616c1.566-2.705,3.491-5.1,5.578-7.317l-30.452-25.021l12.628-11.143l32.328,26.549 c1.291-0.496,2.544-1.096,3.899-1.462c3.329-0.894,6.771-1.349,10.226-1.349c4.846,0,9.647,0.893,14.145,2.624 c2.98-18.857,19.336-33.313,39.012-33.313h18.16V65.835c0-16.453-13.344-29.796-29.805-29.796H29.804 C13.343,36.039,0,49.381,0,65.835v200.703c0,16.461,13.343,29.804,29.804,29.804H148.98 C153.031,292.914,157.734,290.299,162.988,288.902z M44.527,72.413c4.563-5.173,12.436-5.651,17.608-1.104l121.828,107.514 c6.547,5.768,16.39,5.768,22.935,0L328.723,71.308c5.164-4.539,13.041-4.061,17.605,1.104c4.558,5.166,4.061,13.042-1.103,17.607 L223.402,197.532c-7.969,7.034-17.973,10.55-27.971,10.55c-9.998,0-20.002-3.516-27.969-10.55L45.635,90.02 C40.467,85.455,39.973,77.579,44.527,72.413z M43.998,263.525c-1.547,1.274-3.416,1.892-5.269,1.892 c-2.403,0-4.792-1.04-6.433-3.037c-2.916-3.549-2.403-8.787,1.146-11.703l84.342-69.256l12.629,11.143L43.998,263.525z" />
                                                <path
                                                    d="M390.361,268.918c-20.424,0-37.047,16.623-37.047,37.047s16.623,37.049,37.047,37.049 c20.423,0,37.049-16.625,37.049-37.049S410.784,268.918,390.361,268.918z" />
                                                <path
                                                    d="M486.139,324.05l-13.35-7.707c0.429-3.444,1.048-6.822,1.048-10.379c0-3.558-0.619-6.943-1.048-10.387l13.35-7.706 c3.348-1.935,5.782-5.11,6.783-8.837c0.998-3.729,0.478-7.697-1.455-11.044l-17.67-30.601c-2.695-4.669-7.596-7.275-12.623-7.275 c-2.468,0-4.967,0.624-7.258,1.948l-13.269,7.659c-5.58-4.24-11.518-8.017-18.063-10.762v-14.99 c0-8.039-6.512-14.552-14.553-14.552h-35.344c-8.039,0-14.553,6.513-14.553,14.552v14.99c-6.543,2.745-12.48,6.521-18.052,10.762 l-13.278-7.667c-2.232-1.291-4.74-1.948-7.273-1.948c-1.26,0-2.529,0.161-3.77,0.496c-3.727,0.998-6.904,3.435-8.838,6.78 l-17.67,30.607c-4.02,6.959-1.633,15.86,5.328,19.881l7.008,4.042c0.982,0.514,1.918,1.049,2.85,1.65l3.492,2.014 c-0.022,0.202-0.031,0.406-0.065,0.607c3.354,2.746,6.411,5.865,8.633,9.723l14.067,24.347c4.822,8.421,6.115,18.216,3.605,27.653 c-1.51,5.626-4.279,10.693-8.064,14.91c1.452,1.631,2.702,3.401,3.833,5.237l10.135-5.856c5.578,4.247,11.506,8.023,18.059,10.767 v14.993c0,8.039,6.514,14.552,14.553,14.552h35.344c8.041,0,14.553-6.513,14.553-14.552v-14.993 c6.555-2.744,12.482-6.52,18.063-10.767l13.269,7.668c2.231,1.289,4.744,1.947,7.277,1.947c1.256,0,2.523-0.162,3.768-0.494 c3.728-1,6.902-3.436,8.836-6.782l17.67-30.608C495.486,336.97,493.1,328.07,486.139,324.05z M390.361,359.646 c-29.602,0-53.68-24.08-53.68-53.682c0-29.6,24.078-53.68,53.68-53.68c29.6,0,53.682,24.08,53.682,53.68 C444.043,335.566,419.961,359.646,390.361,359.646z" />
                                                <path
                                                    d="M304.691,387.166l-10.598-6.115c0.342-2.736,0.83-5.415,0.83-8.241c0-2.817-0.488-5.507-0.83-8.243l10.598-6.115 c2.655-1.535,4.589-4.053,5.385-7.017c0.787-2.964,0.373-6.107-1.154-8.771l-14.023-24.28c-2.145-3.713-6.033-5.783-10.022-5.783 c-1.955,0-3.939,0.504-5.757,1.551l-10.533,6.083c-4.434-3.37-9.152-6.367-14.341-8.543v-11.898c0-6.383-5.173-11.548-11.55-11.548 h-28.057c-6.377,0-11.549,5.165-11.549,11.548v11.898c-5.199,2.176-9.908,5.173-14.332,8.543l-10.543-6.09 c-1.762-1.023-3.742-1.544-5.747-1.544c-1.007,0-2.024,0.13-3.017,0.397c-2.952,0.788-5.471,2.721-7.016,5.378l-14.024,24.288 c-3.183,5.53-1.29,12.596,4.231,15.788l10.598,6.115c-0.342,2.736-0.826,5.426-0.826,8.243c0,2.826,0.484,5.505,0.826,8.233 l-10.598,6.115c-5.521,3.191-7.414,10.258-4.231,15.779l14.024,24.305c1.545,2.648,4.063,4.582,7.016,5.378 c0.992,0.267,2,0.397,2.998,0.397c2.008,0,4.004-0.528,5.766-1.551l10.533-6.082c4.434,3.369,9.143,6.366,14.342,8.543v11.904 c0,6.375,5.172,11.549,11.549,11.549h28.057c6.377,0,11.55-5.174,11.55-11.549v-11.904c5.198-2.177,9.907-5.174,14.341-8.543 l10.533,6.082c1.762,1.023,3.762,1.551,5.767,1.551c0.997,0,2.005-0.13,2.997-0.397c2.957-0.796,5.471-2.729,7.016-5.378 l14.023-24.296C312.105,397.423,310.213,390.358,304.691,387.166z M228.662,404.66c-17.58,0-31.84-14.26-31.84-31.851 c0-17.591,14.26-31.852,31.84-31.852c17.59,0,31.851,14.262,31.851,31.852C260.513,390.4,246.252,404.66,228.662,404.66z" />
                                            </g>
                                        </g>
                                    
                                    </svg>
                                        <span
                                            class="text-sm font-semibold group-hover/link:underline group-focus-visible/link:underline text-custom-600 dark:text-custom-400"
                                            style="color:#34d399">
                                            Active
                                        </span>
                                    </a>




                                    <a wire:click="deleteEmailConfiguration({{ $emailConfiguration->id }})"
                                        class="relative inline-flex items-center justify-center gap-1 outline-none cursor-pointer fi-link group/link fi-size-sm fi-link-size-sm fi-color-custom fi-color-primary fi-ac-action fi-ac-link-action">
                                        <svg style="--c-400:#dc2626;--c-600:#dc2626);"
                                            class="w-4 h-4 fi-link-icon text-custom-600 dark:text-custom-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="#dc2626"
                                            aria-hidden="true" data-slot="icon">
                                            <path
                                                d="M 10 2 L 9 3 L 3 3 L 3 5 L 21 5 L 21 3 L 15 3 L 14 2 L 10 2 z M 4.3652344 7 L 6.0683594 22 L 17.931641 22 L 19.634766 7 L 4.3652344 7 z">
                                            </path>
                                        </svg>
                                        <span
                                            class="text-sm font-semibold group-hover/link:underline group-focus-visible/link:underline text-custom-600 dark:text-custom-400"
                                            style="color:#dc2626">
                                            Delete
                                        </span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                    <tfoot class="divide-y divide-gray-200 dark:divide-white/5">
                        <tr class="bg-gray-50 dark:bg-white/5">
                            <td class="px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 fi-ta-footer-cell"
                                colspan="7">
                                {{-- {{ $emailConfigurations->links('pagination::tailwind') }} --}}
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>