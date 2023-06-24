<div id="mobile-nav-container" class="hidden lg:hidden w-full h-[200px] bg-green-50">
    <div class="flex">
        <ul class="ml-5 mr-5 py-5">
            <li id="services" class="mb-5 pl-5 pr-5" onclick="showServicesList()">
                {{ __('navbar.Services') }}
            </li>
            <li id="company" class="mb-5 pl-5 pr-5" onclick="showCompanyList()">
                {{ __('navbar.Company') }}
            </li>
            <li class="mb-5">
                <a href="/pricing" class="pl-5 pr-5">
                    {{ __('navbar.Pricing') }}
                </a>
            </li>
            <li id="resources" class="pl-5 mr-5" onclick="showResourcesList()">
                {{ __('navbar.Resources') }}
            </li>
        </ul> 
        <ul id="servicesList" class="hidden py-5 pl-5">
            <li class="mb-2">
                <a href="/#field-auto">
                    {{ __('navbar.Field Automation') }}
                </a>
            </li>
            <li class="mb-2">
                <a href="/#sales-auto">
                    {{ __('navbar.Sales Automation') }}
                </a>
            </li>
            <li class="mb-2">
                <a href="/#mobile-insp">
                    {{ __('navbar.Mobile Inspection') }}
                </a>
            </li>
            <li class="mb-2">
                <a href="/#survey">
                    {{ __('navbar.Hybrid Survey Service') }}
                </li>
            </a>
        </ul>
        <ul id="companyList" class="hidden py-5 pl-5">
            <li class="mb-2">
                <a href="/about-us">
                    {{ __('navbar.About Us') }}
                </a>
            </li>
            <li class="mb-2">
                <a href="/contact">
                    {{ __('navbar.Contact Us') }}
                </a>
            </li>
        </ul>
        <ul id="resourcesList" class="hidden py-5 pl-5">
            <li class="mb-2">
                <a href="/usecases">
                    {{ __('navbar.Use Cases') }}
                </a>
            </li>
            <li class="mb-2">
                <a href="/templates">
                    {{ __('navbar.Templates') }}
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="flex mb-2">
                        {{ __('navbar.Blog') }}
                        <x-coming-soon-chip/>
                    </span>
                </a>
            </li>
        </ul>
    </div>
</div>

<script>
    const navOpenBtn = document.querySelector('#mobile-open-a');
	const navCloseBtn = document.querySelector('#mobile-close-a');
	const mobNavContainer = document.querySelector('#mobile-nav-container');
    var listServices = document.getElementById("servicesList");
    var listCompany = document.getElementById("companyList");
    var listResources = document.getElementById("resourcesList");
    var servicesListItem = document.getElementById("services");
    var companyListItem = document.getElementById("company");
    var resourcesListItem = document.getElementById("resources");

    //Hamburger Menu functionality
	const hamburgerMenu = function () {
		navOpenBtn.addEventListener('click', function (e) {
			mobNavContainer.classList.remove('hidden');
			navCloseBtn.classList.remove('hidden');
			navOpenBtn.classList.add('hidden');
		});

		navCloseBtn.addEventListener('click', function (e) {
			mobNavContainer.classList.add('hidden');
			navCloseBtn.classList.add('hidden');
			navOpenBtn.classList.remove('hidden');
		});
	};

    hamburgerMenu();
    
    function showServicesList(){
        if(listServices.style.display == "none") {
            servicesListItem.style.fontWeight = "bold";
            companyListItem.style.fontWeight = "normal";
            resourcesListItem.style.fontWeight = "normal";
            listServices.style.display = "block";
            listCompany.style.display = "none";
            listResources.style.display = "none";
        } else {
            listServices.style.display = "none";
            servicesListItem.style.fontWeight = "normal";
        }
    }

    showServicesList();


    function showCompanyList(){
        if(listCompany.style.display == "none") {
            servicesListItem.style.fontWeight = "normal";
            companyListItem.style.fontWeight = "bold";
            resourcesListItem.style.fontWeight = "normal";
            listServices.style.display = "none";
            listCompany.style.display = "block";
            listResources.style.display = "none";
        } else {
            listCompany.style.display = "none";
            servicesListItem.style.fontWeight = "normal";
        }
    }
    
    showCompanyList();

    function showResourcesList(){
        if(listResources.style.display == "none") {
            servicesListItem.style.fontWeight = "normal";
            resourcesListItem.style.fontWeight = "bold";
            companyListItem.style.fontWeight = "normal";
            listServices.style.display = "none";
            listCompany.style.display = "none";
            listResources.style.display = "block";
        } else {
            listResources.style.display = "none";
            resourcesListItem.style.fontWeight = "normal";
        }
    }

    showResourcesList();

</script>
