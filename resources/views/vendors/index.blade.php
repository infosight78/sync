<x-app-layout>
   <body class="">
      <div class="page">
         <div class="content">
            <div class="main-content">
               <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                  <div class="my-auto">
                     <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Vendors List</h5>
                     <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                           <li class="text-[12px]"> 
							<a class="flex items-center text-primary hover:text-primary" href="javascript:void(0);">Vendors Management
								<i class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> 
                           </li>
                           <li class="text-[12px]"> 
								<a class="flex items-center text-textmuted" href="javascript:void(0);">Vendors List</a> 
                           </li>
                        </ol>
                     </nav>
                  </div>
               </div>
               <div class="grid grid-cols-12 gap-6">
                  <div class="col-span-12">
                     <div class="box">
                        <div class="box-header">
                           <h5 class="box-title">Vendors List</h5>
                        </div>
                        <div class="box-body space-y-3">
                            <div class="overflow-hidden table-bordered">
                               <div id="sort-table" class="ti-custom-table ti-striped-table ti-custom-table-hover"></div>
                            </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</x-app-layout>