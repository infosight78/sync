<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\sync\resources\views/vendors/index.blade.php ENDPATH**/ ?>