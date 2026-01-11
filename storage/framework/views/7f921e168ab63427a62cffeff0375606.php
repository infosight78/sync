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
			<div id="hs-overlay-chat" class="hs-overlay hidden ti-offcanvas ti-offcanvas-right overflow-auto" tabindex="-1">
				<div class="ti-offcanvas-header !py-2 rounded-none">
					<h5 class="text-[.875rem] uppercase mb-0 text-defaulttextcolor font-semibold" id="sidebarLabel">Notifications</h5>
					<button type="button"
					class="ti-btn flex-shrink-0 p-0  transition-none text-defaulttextcolor dark:text-defaulttextcolor/70 hover:text-gray-700 focus:ring-gray-400 focus:ring-offset-white  dark:hover:text-white/80 dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
					data-hs-overlay="#hs-overlay-chat">
					<span class="sr-only">Close modal</span>
					<i class="ri-close-fill leading-none text-lg"></i>
					</button>
				</div>
				<div class="ti-offcanvas-body rounded-none p-0">
					<ul class="nav nav-tabs  p-4" role="tablist">
					<div class=" rtl:space-x-reverse" aria-label="Tabs" role="tablist" role="tablist">
						<button type="button"
						class="hs-tab-active:bg-primary w-full mb-2 rounded-[4px] !py-[10px] !px-[16px] text-start hs-tab-active:border-b-transparent text-defaultsize border-0 hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-white  bg-light  font-semibold  text-defaulttextcolor dark:text-defaulttextcolor/70  hover:text-gray-700 dark:bg-bodybg2 dark:border-white/10  active"
						id="chat-item" data-hs-tab="#chat" aria-controls="chat" role="tab">
						<i class="fe fe-message-circle text-[.9375rem] me-2 inline-flex"></i>Chat
						</button>
						<button type="button"
						class="hs-tab-active:bg-primary w-full mb-2  rounded-[4px] !py-[10px] !px-[16px] text-start hs-tab-active:border-b-transparent text-defaultsize border-0 hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-white   bg-light font-semibold  text-defaulttextcolor dark:text-defaulttextcolor/70  hover:text-gray-700 dark:bg-bodybg2 dark:border-white/10  dark:hover:text-gray-300"
						id="notification-item" data-hs-tab="#notification" aria-controls="notification" role="tab">
						<i class="fe fe-bell text-[.9375rem] me-2 inline-flex"></i> Notifications
						</button>
						<button type="button"
						class="hs-tab-active:bg-primary w-full mb-0 rounded-[4px] !py-[10px] !px-[16px] text-start hs-tab-active:border-b-transparent text-defaultsize border-0 hs-tab-active:text-white dark:hs-tab-active:bg-primary dark:hs-tab-active:border-b-white/10 dark:hs-tab-active:text-white   bg-light font-semibold  text-defaulttextcolor dark:text-defaulttextcolor/70  hover:text-gray-700 dark:bg-bodybg2 dark:border-white/10  dark:hover:text-gray-300"
						id="friends-item" data-hs-tab="#friends" aria-controls="friends" role="tab">
						<i class="fe fe-users text-[.9375rem] me-2 inline-flex"></i>Friends
						</button>
					</div>
					</ul>
					<div class="tab-content !border-0 ">
					<div
						class="tab-pane !text-defaulttextcolor dark:text-defaulttextcolor/70 !border-s-0 !border-e-0 !rounded-none !p-0 show border-defaultborder dark:border-defaultborder/10 "
						id="chat" role="tabpanel" aria-labelledby="chat-item">
						<div class="list flex items-center border-b border-defaultborder dark:border-defaultborder/10  p-3">
						<div class="">
							<span class="avatar bg-primary avatar-rounded avatar-md">CH</span>
						</div>
						<a class="w-full ms-3" href="javascript:void(0);">
							<p class="mb-0 flex ">
							<b>New Websites is Created</b>
							</p>
							<div class="flex justify-between items-center">
							<div class="flex items-center">
								<i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
								<small class="text-textmuted ms-auto">30 mins ago</small>
								<p class="mb-0"></p>
							</div>
							</div>
						</a>
						</div>
						<div class="list flex items-center border-b border-defaultborder dark:border-defaultborder/10  p-3">
						<div class="">
							<span class="avatar bg-danger avatar-rounded avatar-md">N</span>
						</div>
						<a class="w-full ms-3" href="javascript:void(0);">
							<p class="mb-0 flex ">
							<b>Prepare For the Next Project</b>
							</p>
							<div class="flex justify-between items-center">
							<div class="flex items-center">
								<i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
								<small class="text-textmuted ms-auto">2 hours ago</small>
								<p class="mb-0"></p>
							</div>
							</div>
						</a>
						</div>
						<div class="list flex items-center border-b border-defaultborder dark:border-defaultborder/10  p-3">
						<div class="">
							<span class="avatar bg-info avatar-rounded avatar-md">S</span>
						</div>
						<a class="w-full ms-3" href="javascript:void(0);">
							<p class="mb-0 flex ">
							<b>Decide the live Discussion</b>
							</p>
							<div class="flex justify-between items-center">
							<div class="flex items-center">
								<i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
								<small class="text-textmuted ms-auto">3 hours ago</small>
								<p class="mb-0"></p>
							</div>
							</div>
						</a>
						</div>
						<div class="list flex items-center border-b border-defaultborder dark:border-defaultborder/10  p-3">
						<div class="">
							<span class="avatar bg-warning avatar-rounded avatar-md">K</span>
						</div>
						<a class="w-full ms-3" href="javascript:void(0);">
							<p class="mb-0 flex ">
							<b>Meeting at 3:00 pm</b>
							</p>
							<div class="flex justify-between items-center">
							<div class="flex items-center">
								<i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
								<small class="text-textmuted ms-auto">4 hours ago</small>
								<p class="mb-0"></p>
							</div>
							</div>
						</a>
						</div>
						<div class="list flex items-center border-b border-defaultborder dark:border-defaultborder/10  p-3">
						<div class="">
							<span class="avatar bg-success avatar-rounded avatar-md">R</span>
						</div>
						<a class="w-full ms-3" href="javascript:void(0);">
							<p class="mb-0 flex ">
							<b>Prepare for Presentation</b>
							</p>
							<div class="flex justify-between items-center">
							<div class="flex items-center">
								<i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
								<small class="text-textmuted ms-auto">1 day ago</small>
								<p class="mb-0"></p>
							</div>
							</div>
						</a>
						</div>
						<div class="list flex items-center border-b border-defaultborder dark:border-defaultborder/10  p-3">
						<div class="">
							<span class="avatar bg-pinkmain avatar-rounded avatar-md">MS</span>
						</div>
						<a class="w-full ms-3" href="javascript:void(0);">
							<p class="mb-0 flex ">
							<b>Prepare for Presentation</b>
							</p>
							<div class="flex justify-between items-center">
							<div class="flex items-center">
								<i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
								<small class="text-textmuted ms-auto">1 day ago</small>
								<p class="mb-0"></p>
							</div>
							</div>
						</a>
						</div>
						<div class="list flex items-center border-b border-defaultborder dark:border-defaultborder/10  p-3">
						<div class="">
							<span class="avatar bg-purplemain avatar-rounded avatar-md">L</span>
						</div>
						<a class="w-full ms-3" href="javascript:void(0);">
							<p class="mb-0 flex ">
							<b>Prepare for Presentation</b>
							</p>
							<div class="flex justify-between items-center">
							<div class="flex items-center">
								<i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
								<small class="text-textmuted ms-auto">45 minutes ago</small>
								<p class="mb-0"></p>
							</div>
							</div>
						</a>
						</div>
						<div class="list flex border-b border-defaultborder dark:border-defaultborder/10 items-center p-3">
						<div class="">
							<span class="avatar bg-indigomain avatar-rounded avatar-md">U</span>
						</div>
						<a class="w-full ms-3" href="javascript:void(0);">
							<p class="mb-0 flex ">
							<b>Prepare for Presentation</b>
							</p>
							<div class="flex justify-between items-center">
							<div class="flex items-center">
								<i class="fa-regular fa-clock text-textmuted me-1 text-[.6875rem]"></i>
								<small class="text-textmuted ms-auto">2 days ago</small>
								<p class="mb-0"></p>
							</div>
							</div>
						</a>
						</div>
					</div>
					<div
						class="tab-pane !text-defaulttextcolor dark:text-defaulttextcolor/70 !border-s-0 !border-e-0 !rounded-none !p-0 border-defaultborder dark:border-defaultborder/10  hidden"
						id="notification" role="tabpanel" aria-labelledby="notification-item">
						<div class="ti-list-group ti-list-group-flush ">
						<div class="ti-list-group-item !border-s-0 !border-e-0 !border-t-0 flex  items-center">
							<span class="avatar avatar-lg online avatar-rounded flex-shrink-0">
							<img src="<?php echo e(asset('public/images/faces/1.jpg')); ?>" alt="img">
							</span>
							<div class="ms-3">
							<strong>Madeleine</strong> Hey! there I' am available....
							<div class="small text-textmuted">
								3 hours ago
							</div>
							</div>
						</div>
						<div class="ti-list-group-item !border-s-0 !border-e-0 !border-t-0 flex  items-center">
							<span class="avatar avatar-lg online avatar-rounded flex-shrink-0">
							<img src="<?php echo e(asset('public/images/faces/2.jpg')); ?>" alt="img">
							</span>
							<div class="ms-3">
							<strong>Anthony</strong> New product Launching...
							<div class="small text-textmuted">
								5 hour ago
							</div>
							</div>
						</div>
						<div class="ti-list-group-item !border-s-0 !border-e-0 !border-t-0 flex  items-center">
							<span class="avatar avatar-lg avatar-rounded flex-shrink-0">
							<img src="<?php echo e(asset('public/images/faces/3.jpg')); ?>" alt="img">
							</span>
							<div class="ms-3">
							<strong>Olivia</strong> New Schedule Realease......
							<div class="small text-textmuted">
								45 minutes ago
							</div>
							</div>
						</div>
						<div class="ti-list-group-item !border-s-0 !border-e-0 !border-t-0 flex  items-center">
							<span class="avatar avatar-lg avatar-rounded flex-shrink-0">
							<img src="<?php echo e(asset('public/images/faces/4.jpg')); ?>" alt="img">
							</span>
							<div class="ms-3">
							<strong>Madeleine</strong> Hey! there I' am available....
							<div class="small text-textmuted">
								3 hours ago
							</div>
							</div>
						</div>
						<div class="ti-list-group-item !border-s-0 !border-e-0 !border-t-0 flex  items-center">
							<span class="avatar avatar-lg avatar-rounded flex-shrink-0">
							<img src="<?php echo e(asset('public/images/faces/5.jpg')); ?>" alt="img">
							</span>
							<div class="ms-3">
							<strong>Anthony</strong> New product Launching...
							<div class="small text-textmuted">
								5 hour ago
							</div>
							</div>
						</div>
						<div class="ti-list-group-item !border-s-0 !border-e-0 !border-t-0 flex  items-center">
							<span class="avatar avatar-lg avatar-rounded flex-shrink-0">
							<img src="<?php echo e(asset('public/images/faces/6.jpg')); ?>" alt="img">
							</span>
							<div class="ms-3">
							<strong>Olivia</strong> New Schedule Realease......
							<div class="small text-textmuted">
								45 minutes ago
							</div>
							</div>
						</div>
						<div
							class="ti-list-group-item  !border-b border-defaultborder dark:border-defaultborder/10 !border-s-0 !border-e-0 !border-t-0 flex  items-center">
							<span class="avatar avatar-lg avatar-rounded flex-shrink-0">
							<img src="<?php echo e(asset('public/images/faces/7.jpg')); ?>" alt="img">
							</span>
							<div class="ms-3">
							<strong>Olivia</strong> Hey! there I' am available....
							<div class="small text-textmuted">
								12 minutes ago
							</div>
							</div>
						</div>
						</div>
					</div>
					<div
						class="tab-pane !text-defaulttextcolor dark:text-defaulttextcolor/70 !border-s-0 !border-e-0 !rounded-none !p-0 border-defaultborder dark:border-defaultborder/10  active hidden"
						id="friends" role="tabpanel" aria-labelledby="friends-item">
						<div class="ti-list-group ti-list-group-flush ">
						<div class="ti-list-group-item flex !border-t-0 items-center">
							<span class="avatar avatar-md online avatar-rounded flex-shrink-0">
							<img src="<?php echo e(asset('public/images/faces/1.jpg')); ?>" alt="img">
							</span>
							<div class="ms-2">
							<div class="font-semibold" data-hs-overlay="#chatmodel">Mozelle Belt</div>
							</div>
							<div class="ms-auto">
							<a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
								class="fab fa-facebook-messenger"></i></a>
							</div>
						</div>
						<div class="ti-list-group-item flex  items-center">
							<span class="avatar avatar-md avatar-rounded flex-shrink-0">
							<img src="<?php echo e(asset('public/images/faces/2.jpg')); ?>" alt="img">
							</span>
							<div class="ms-2">
							<div class="font-semibold" data-hs-overlay="#chatmodel">Florinda Carasco</div>
							</div>
							<div class="ms-auto">
							<a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
								class="fab fa-facebook-messenger"></i></a>
							</div>
						</div>
						<div class="ti-list-group-item flex  items-center">
							<span class="avatar avatar-md avatar-rounded flex-shrink-0">
							<img src="<?php echo e(asset('public/images/faces/5.jpg')); ?>" alt="img">
							</span>
							<div class="ms-2">
							<div class="font-semibold" data-hs-overlay="#chatmodel">Alina Bernier</div>
							</div>
							<div class="ms-auto">
							<a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
								class="fab fa-facebook-messenger"></i></a>
							</div>
						</div>
						<div class="ti-list-group-item flex  items-center">
							<span class="avatar avatar-md online avatar-rounded flex-shrink-0">
							<img src="<?php echo e(asset('public/images/faces/6.jpg')); ?>" alt="img">
							</span>
							<div class="ms-2">
							<div class="font-semibold" data-hs-overlay="#chatmodel">Zula Mclaughin</div>
							</div>
							<div class="ms-auto">
							<a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
								class="fab fa-facebook-messenger"></i></a>
							</div>
						</div>
						<div class="ti-list-group-item flex  items-center">
							<span class="avatar avatar-md online avatar-rounded flex-shrink-0">
							<img src="<?php echo e(asset('public/images/faces/8.jpg')); ?>" alt="img">
							</span>
							<div class="ms-2">
							<div class="font-semibold" data-hs-overlay="#chatmodel">Isidro Heide</div>
							</div>
							<div class="ms-auto">
							<a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
								class="fab fa-facebook-messenger"></i></a>
							</div>
						</div>
						<div class="ti-list-group-item flex  items-center">
							<span class="avatar avatar-md online avatar-rounded flex-shrink-0">
							<img src="<?php echo e(asset('public/images/faces/8.jpg')); ?>" alt="img">
							</span>
							<div class="ms-2">
							<div class="font-semibold" data-hs-overlay="#chatmodel">Mozelle Belt</div>
							</div>
							<div class="ms-auto">
							<a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light"><i
								class="fab fa-facebook-messenger"></i></a>
							</div>
						</div>
						<div class="ti-list-group-item flex  items-center">
							<span class="avatar avatar-md online avatar-rounded flex-shrink-0">
							<img src="<?php echo e(asset('public/images/faces/9.jpg')); ?>" alt="img">
							</span>
							<div class="ms-2">
							<div class="font-semibold" data-hs-overlay="#chatmodel">Florinda Carasco</div>
							</div>
							<div class="ms-auto">
							<a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
								class="fab fa-facebook-messenger"></i></a>
							</div>
						</div>
						<div class="ti-list-group-item flex  items-center">
							<span class="avatar avatar-md online avatar-rounded flex-shrink-0">
							<img src="<?php echo e(asset('public/images/faces/10.jpg')); ?>" alt="img">
							</span>
							<div class="ms-2">
							<div class="font-semibold" data-hs-overlay="#chatmodel">Alina Bernier</div>
							</div>
							<div class="ms-auto">
							<a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light"><i
								class="fab fa-facebook-messenger"></i></a>
							</div>
						</div>
						<div class="ti-list-group-item flex  items-center">
							<span class="avatar avatar-md avatar-rounded flex-shrink-0">
							<img src="<?php echo e(asset('public/images/faces/11.jpg')); ?>" alt="img">
							</span>
							<div class="ms-2">
							<div class="font-semibold" data-hs-overlay="#chatmodel">Zula Mclaughin</div>
							</div>
							<div class="ms-auto">
							<a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
								class="fab fa-facebook-messenger"></i></a>
							</div>
						</div>
						<div class="ti-list-group-item flex  items-center">
							<span class="avatar avatar-md online avatar-rounded flex-shrink-0">
							<img src="<?php echo e(asset('public/images/faces/12.jpg')); ?>" alt="img">
							</span>
							<div class="ms-2">
							<div class="font-semibold" data-hs-overlay="#chatmodel">Isidro Heide</div>
							</div>
							<div class="ms-auto">
							<a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light"><i
								class="fab fa-facebook-messenger"></i></a>
							</div>
						</div>
						<div class="ti-list-group-item flex  items-center">
							<span class="avatar avatar-md online avatar-rounded flex-shrink-0">
							<img src="<?php echo e(asset('public/images/faces/2.jpg')); ?>" alt="img">
							</span>
							<div class="ms-2">
							<div class="font-semibold" data-hs-overlay="#chatmodel">Florinda Carasco</div>
							</div>
							<div class="ms-auto">
							<a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
								class="fab fa-facebook-messenger"></i></a>
							</div>
						</div>
						<div class="ti-list-group-item flex  items-center">
							<span class="avatar avatar-md online avatar-rounded flex-shrink-0">
							<img src="<?php echo e(asset('public/images/faces/2.jpg')); ?> " alt="img">
							</span>
							<div class="ms-2">
							<div class="font-semibold" data-hs-overlay="#chatmodel">Alina Bernier</div>
							</div>
							<div class="ms-auto">
							<a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
								class="fab fa-facebook-messenger"></i></a>
							</div>
						</div>
						<div class="ti-list-group-item flex  items-center">
							<span class="avatar avatar-md online avatar-rounded flex-shrink-0">
							<img src="<?php echo e(asset('public/images/faces/3.jpg')); ?>" alt="img">
							</span>
							<div class="ms-2">
							<div class="font-semibold" data-hs-overlay="#chatmodel">Zula Mclaughin</div>
							</div>
							<div class="ms-auto">
							<a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
								class="fab fa-facebook-messenger"></i></a>
							</div>
						</div>
						<div class="ti-list-group-item flex !border-b border-defaultborder dark:border-defaultborder/10 items-center">
							<span class="avatar avatar-md online avatar-rounded flex-shrink-0">
							<img src="<?php echo e(asset('public/images/faces/4.jpg')); ?>" alt="img">
							</span>
							<div class="ms-2">
							<div class="font-semibold" data-hs-overlay="#chatmodel">Isidro Heide</div>
							</div>
							<div class="ms-auto">
							<a href="javascript:void(0);" class="ti-btn ti-btn-sm ti-btn-light" data-hs-overlay="#chatmodel"><i
								class="fab fa-facebook-messenger"></i></a>
							</div>
						</div>
						</div>
					</div>
					</div>
				</div>
			</div>
			<div class="hs-overlay hidden ti-modal" id="chatmodel">
				<div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
					<div class="ti-modal-content chat !border-0">
					<div class="box overflow-hidden !mb-0 !border-0 !shadow-none">
						<div class="action-header  flex items-center clearfix">
						<div class="float-start xs:hidden flex">
							<div class="avatar avatar-lg rounded-circle me-3"> 
								<img src="<?php echo e(asset('public/images/faces/6.jpg')); ?>" class="rounded-circle user_img" alt="img"> 
							</div>
							<div class="items-center">
							<h5 class="text-fixed-white mb-0">Daneil Scott</h5> <span class="dot-label bg-success"></span><span
								class="me-3 text-fixed-white">online</span>
							</div>
						</div>
						<ul class="ah-actions actions ms-auto items-center float-end">
							<li class="call-icon"> <a href="#" class="hidden md:block phone-button" data-hs-overlay="#audiomodal"> <i
								class="fe fe-phone"></i> </a> </li>
							<li class="video-icon"> <a href="#" class="hidden md:block phone-button" data-hs-overlay="#videomodal"> <i
								class="fe fe-video"></i> </a> </li>
							<li class="hs-dropdown ti-dropdown">
							<a href="#" data-bs-toggle="dropdown" aria-expanded="true"> <i class="fe fe-more-vertical"></i> </a>
							<ul class="ti-dropdown-menu hs-dropdown-menu dropdown-menu-end hidden">
								<li class="ti-dropdown-item"><i class="fa fa-user-circle"></i> View profile</li>
								<li class="ti-dropdown-item"><i class="fa fa-users"></i>Add friends</li>
								<li class="ti-dropdown-item"><i class="fa fa-plus"></i> Add to group</li>
								<li class="ti-dropdown-item"><i class="fa fa-ban"></i> Block</li>
							</ul>
							</li>
							<li> <a href="#" class="" data-bs-dismiss="modal" aria-label="Close"> <i
								class="fe fe-x-circle text-fixed-white"></i> </a> </li>
						</ul>
						</div>
						<div class="box-body msg_card_body">
						<div class="chat-box-single-line"> <abbr
							class="timestamp !text-defaulttextcolor dark:!text-defaulttextcolor/70">February 1st, 2019</abbr> </div>
						<div class="flex justify-start">
							<div class="img_cont_msg"> <img src="<?php echo e(asset('public/images/faces/6.jpg')); ?>" class="rounded-circle user_img_msg"
								alt="img"> </div>
							<div class="msg_cotainer"> Hi, how are you Jenna Side? <span class="msg_time">8:40 AM, Today</span> </div>
						</div>
						<div class="flex justify-end ">
							<div class="msg_cotainer_send"> Hi Connor Paige i am good tnx how about you? <span
								class="msg_time_send">8:55 AM, Today</span> </div>
							<div class="img_cont_msg"> <img src="<?php echo e(asset('public/images/faces/9.jpg')); ?>" class="rounded-circle user_img_msg"
								alt="img"> </div>
						</div>
						<div class="flex justify-start ">
							<div class="img_cont_msg"> <img src="<?php echo e(asset('public/images/faces/6.jpg')); ?>" class="rounded-circle user_img_msg"
								alt="img"> </div>
							<div class="msg_cotainer"> I am good too, thank you for your chat template <span class="msg_time">9:00 AM,
								Today</span> </div>
						</div>
						<div class="flex justify-end ">
							<div class="msg_cotainer_send"> You welcome Connor Paige <span class="msg_time_send">9:05 AM, Today</span>
							</div>
							<div class="img_cont_msg"> <img src="<?php echo e(asset('public/images/faces/9.jpg')); ?>" class="rounded-circle user_img_msg"
								alt="img"> </div>
						</div>
						<div class="flex justify-start ">
							<div class="img_cont_msg"> <img src="<?php echo e(asset('public/images/faces/6.jpg')); ?>" class="rounded-circle user_img_msg"
								alt="img"> </div>
							<div class="msg_cotainer"> Yo, Can you update Views? <span class="msg_time">9:07 AM, Today</span> </div>
						</div>
						<div class="flex justify-end mb-4">
							<div class="msg_cotainer_send"> But I must explain to you how all this mistaken born and I will give <span
								class="msg_time_send">9:10 AM, Today</span> </div>
							<div class="img_cont_msg"> <img src="<?php echo e(asset('public/images/faces/9.jpg')); ?>" class="rounded-circle user_img_msg"
								alt="img"> </div>
						</div>
						<div class="flex justify-start ">
							<div class="img_cont_msg"> <img src="<?php echo e(asset('public/images/faces/6.jpg')); ?>" class="rounded-circle user_img_msg"
								alt="img"> </div>
							<div class="msg_cotainer"> Yo, Can you update Views? <span class="msg_time">9:07 AM, Today</span> </div>
						</div>
						<div class="flex justify-end mb-4">
							<div class="msg_cotainer_send"> But I must explain to you how all this mistaken born and I will give <span
								class="msg_time_send">9:10 AM, Today</span> </div>
							<div class="img_cont_msg"> <img src="<?php echo e(asset('public/images/faces/9.jpg')); ?>" class="rounded-circle user_img_msg"
								alt="img"> </div>
						</div>
						<div class="flex justify-start ">
							<div class="img_cont_msg"> <img src="<?php echo e(asset('public/images/faces/6.jpg')); ?>" class="rounded-circle user_img_msg"
								alt="img"> </div>
							<div class="msg_cotainer"> Yo, Can you update Views? <span class="msg_time">9:07 AM, Today</span> </div>
						</div>
						<div class="flex justify-end mb-4">
							<div class="msg_cotainer_send"> But I must explain to you how all this mistaken born and I will give <span
								class="msg_time_send">9:10 AM, Today</span> </div>
							<div class="img_cont_msg"> <img src="<?php echo e(asset('public/images/faces/9.jpg')); ?>" class="rounded-circle user_img_msg"
								alt="img"> </div>
						</div>
						<div class="flex justify-start">
							<div class="img_cont_msg"><img src="<?php echo e(asset('public/images/faces/6.jpg')); ?>" class="rounded-circle user_img_msg"
								alt="img"> </div>
							<div class="msg_cotainer"> Okay Bye, text you later.. <span class="msg_time">9:12 AM, Today</span> </div>
						</div>
						</div>
						<div class="box-footer border-t">
						<div class="msb-reply flex">
							<div class="input-group"> 
								<input type="text" class="form-control" placeholder="Typing...."> 
								<button type="button" class="ti-btn ti-btn-primary-full !mb-0"> <i class="far fa-paper-plane"
								aria-hidden="true"></i></button>
							</div>
						</div>
						</div>
					</div>
					</div>
				</div>
			</div>
			<div id="videomodal" class="hs-overlay hidden ti-modal">
				<div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
					<div class="ti-modal-content !bg-[#3b4863] !border-0">
					<div class="mx-auto text-center p-[3rem]">
						<button type="button"
						class="hs-dropdown-toggle relative -end-[226px] -top-[29px] !text-[1.5rem] !font-medium text-white"
						data-hs-overlay="#videomodal">
						<span class="sr-only">Close</span>
						<i class="bi bi-x"></i>
						</button>
						<h5 class="text-white">Valex Video call</h5>
						<img src="<?php echo e(asset('public/images/faces/6.jpg')); ?>" class="rounded-full !h-[90px]  mt-4 mb-3 inline-flex" alt="img">
						<h4 class="mb-1 font-semibold text-white">Daneil Scott</h4>
						<h6 class="loading animate-loadingtext text-white">Calling...</h6>
						<div class="mt-[3rem] mb-[2rem]">
						<div class="grid grid-cols-12 gap-x-4">
							<div class="col-span-4">
							<a class="icon icon-shape rounded-full mb-0" href="javascript:void(0);">
								<i class="fas fa-video-slash"></i>
							</a>
							</div>
							<div class="col-span-4">
							<a class="icon icon-shape rounded-full text-white mb-0" href="javascript:void(0);"
								data-hs-overlay="#videomodal">
								<i class="fas fa-phone !bg-danger !text-white"></i>
							</a>
							</div>
							<div class="col-span-4">
							<a class="icon icon-shape rounded-full mb-0" href="javascript:void(0);">
								<i class="fas fa-microphone-slash"></i>
							</a>
							</div>
						</div>
						</div>
					</div>
					</div>
				</div>
			</div>
			<div id="audiomodal" class="hs-overlay hidden ti-modal">
				<div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
					<div class="ti-modal-content border-0">
					<div class="mx-auto text-center p-[3rem]">
						<button type="button"
						class="hs-dropdown-toggle relative -end-[226px] -top-[29px] !text-[1.5rem] !font-medium text-[#8c9097]"
						data-hs-overlay="#audiomodal">
						<span class="sr-only">Close</span>
						<i class="bi bi-x"></i>
						</button>
						<h6 class="text-defaulttextcolor dark:text-defaulttextcolor/70">Valex Voice call</h6>
						<img src="<?php echo e(asset('public/images/faces/6.jpg')); ?>" class="rounded-full !h-[90px] mt-6 mb-4 inline-flex" alt="img">
						<h5 class="mb-1 font-medium text-defaulttextcolor dark:text-defaulttextcolor/70">Daneil Scott</h5>
						<h6 class="loading animate-loadingtext text-defaulttextcolor dark:text-defaulttextcolor/70">Calling...</h6>
						<div class="mt-[2rem] mb-[2rem]">
						<div class="grid grid-cols-12 gap-x-4">
							<div class="col-span-4">
							<a class="icon icon-shape rounded-circle mb-0" href="javascript:void(0);">
								<i class="fas fa-volume-up !bg-light !text-defaulttextcolor"></i>
							</a>
							</div>
							<div class="col-span-4">
							<a class="icon icon-shape rounded-circle text-white mb-0" href="javascript:void(0);"
								data-hs-overlay="#audiomodal">
								<i class="fas fa-phone text-white !bg-success"></i>
							</a>
							</div>
							<div class="col-span-4">
							<a class="icon icon-shape  rounded-circle mb-0" href="javascript:void(0);">
								<i class="fas fa-microphone-slash !bg-light !text-defaulttextcolor"></i>
							</a>
							</div>
						</div>
						</div>
					</div>
					</div>
				</div>
			</div>
            <div class="content">
                <div class="main-content">
                    <div class="md:flex block items-center justify-between my-6 page-header-breadcrumb">
                        <div>
                            <h4 class="mb-0 text-defaulttextcolor font-medium">Hi, welcome back!</h4>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box overflow-hidden sales-box bg-primary-gradient !rounded-sm">
                            <div class="px-4 pt-4 pb-2">
                                <div>
                                <h6 class="mb-3 text-[.75rem] font-medium text-fixed-white">TODAY ORDERS</h6>
                                </div>
                                <div class="pb-0 mt-0">
                                <div class="flex">
                                    <div>
                                    <h4 class="font-bold text-[1.25rem] text-fixed-white">$5,74.12</h4>
                                    <p class="mb-0 text-[.75rem] text-fixed-white opacity-[0.7]">Compared to last week</p>
                                    </div>
                                    <span class="float-end my-auto ms-auto">
                                    <i class="fas fa-arrow-circle-up text-fixed-white"></i>
                                    <span class="text-fixed-white opacity-[0.7]"> +427</span>
                                    </span>
                                </div>
                                </div>
                            </div>
                            <div id="compositeline" class="!-mb-[2px]"></div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box  overflow-hidden sales-card bg-danger-gradient !rounded-sm">
                            <div class="px-4 pt-4 pb-2">
                                <div>
                                <h6 class="mb-3 text-[.75rem] font-medium text-fixed-white">TODAY EARNINGS</h6>
                                </div>
                                <div class="pb-0 mt-0">
                                <div class="flex">
                                    <div>
                                    <h4 class="text-[1.25rem] font-bold text-fixed-white">$1,230.17</h4>
                                    <p class="mb-0  text-[.75rem] text-fixed-white opacity-[0.7]">Compared to last week</p>
                                    </div>
                                    <span class="float-end my-auto ms-auto">
                                    <i class="fas fa-arrow-circle-down text-fixed-white"></i>
                                    <span class="text-fixed-white opacity-[0.7]"> -23.09%</span>
                                    </span>
                                </div>
                                </div>
                            </div>
                            <div id="compositeline2" class="!-mb-[2px]"></div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box  overflow-hidden sales-card bg-success-gradient !rounded-sm">
                                <div class="px-4 pt-4 pb-2">
                                    <div>
                                    <h6 class="mb-3 text-[.75rem] font-medium text-fixed-white">TOTAL EARNINGS</h6>
                                    </div>
                                    <div class="pb-0 mt-0">
                                    <div class="flex">
                                        <div>
                                        <h4 class="text-[1.25rem] font-bold text-fixed-white">$7,125.70</h4>
                                        <p class="mb-0 text-[.75rem] text-fixed-white opacity-[0.7]">Compared to last week</p>
                                        </div>
                                        <span class="float-end my-auto ms-auto">
                                        <i class="fas fa-arrow-circle-up text-fixed-white"></i>
                                        <span class="text-fixed-white opacity-[0.7]"> 52.09%</span>
                                        </span>
                                    </div>
                                    </div>
                                </div>
                                <div id="compositeline3" class="!-mb-[2px]"></div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 lg:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <div class="box  overflow-hidden sales-card bg-warning-gradient !rounded-sm">
                                <div class="px-4 pt-4 pb-2">
                                    <div>
                                    <h6 class="mb-3 text-[.75rem] font-medium text-fixed-white">PRODUCT SOLD</h6>
                                    </div>
                                    <div class="pb-0 mt-0">
                                    <div class="flex">
                                        <div>
                                        <h4 class="text-[1.25rem] font-bold text-fixed-white">$4,820.50</h4>
                                        <p class="mb-0 text-[.75rem] text-fixed-white opacity-[0.7]">Compared to last week</p>
                                        </div>
                                        <span class="float-end my-auto ms-auto">
                                        <i class="fas fa-arrow-circle-down text-fixed-white"></i>
                                        <span class="text-fixed-white opacity-[0.7]"> -152.3</span>
                                        </span>
                                    </div>
                                    </div>
                                </div>
                                <div id="compositeline4" class="!-mb-[2px]"></div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="md:col-span-12 lg:col-span-12 xl:col-span-7 col-span-12">
                            <div class="box">
                            <div class="box-header !border-b-0 !pb-0 flex justify-between">
                                <div>
                                <h4 class="box-title mb-2">Order status</h4>
                                <div>
                                    <p class="text-[.75rem] text-textmuted font-normal mb-0">Order Status and Tracking. Track your order from ship date to arrival. To begin, enter your order number.</p>
                                </div>
                                </div>
                                <div class="hs-dropdown ti-dropdown">
                                <a aria-label="anchor" href="javascript:void(0);"
                                    class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !pt-1 !pb-[0.1rem] !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-horizontal text-[0.8rem]"></i>
                                </a>
                                <ul class="hs-dropdown-menu z-[106] ti-dropdown-menu hidden">
                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                        href="javascript:void(0);">Action</a></li>
                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                        href="javascript:void(0);">Another action</a></li>
                                    <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                        href="javascript:void(0);">Something else here</a></li>
                                </ul>
                                </div>
                            </div>
                            <div class="box-body !pb-0">
                                <div class="total-revenue">
                                <div>
                                    <h4>120,750</h4>
                                    <label><span class="bg-primary"></span>success</label>
                                </div>
                                <div>
                                    <h4>56,108</h4>
                                    <label><span class="bg-danger"></span>Pending</label>
                                </div>
                                <div>
                                    <h4>32,895</h4>
                                    <label><span class="bg-warning"></span>Failed</label>
                                </div>
                                </div>
                                <div id="Sales-bar" class="sales-bar"></div>
                            </div>
                            </div>
                        </div>
                        <div class="lg:col-span-12 xl:col-span-5 col-span-12">
                            <div class="box p-[20px] card-dashboard-map-one">
                            <h4 class="box-title mb-1">Sales Revenue by Customers in USA</h4>
                            <p class="text-[.75rem] text-textmuted font-normal mb-4">Sales Performance of all states in the United States.</p>
                            <div id="us-map1" class="pt-2"></div>
                            </div>
                        </div>
                    </div>  
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-4 md:col-span-12 lg:col-span-12 col-span-12">
                            <div class="box overflow-hidden">
                                <div class="box-header !border-b-0 !pb-1">
                                    <h4 class="box-title mb-2">Recent Customers</h4>
                                    <p class="text-[.75rem] mb-0 text-textmuted font-normal">A customer is an individual or business that purchases the goods service has evolved to include real-time</p>
                                </div>
                                <div class="box-body !p-0 customers mt-1">
                                    <div class="ti-list-group ti-list-group-flush">
                                        <div class="ti-list-group-item !border-t-0 !border-l-0 !border-r-0 font-medium">
                                            <div class="flex">
                                                <img class="avatar avatar-md avatar-rounded my-auto me-4" src="<?php echo e(asset('public/images/faces/3.jpg')); ?>" alt="Image description">
                                                <div class="flex-grow">
                                                    <div class="flex items-center">
                                                        <div class="mt-0">
                                                            <h5 class="mb-1 text-[.9375rem] leading-none">Samantha Melon</h5>
                                                            <p class="mb-0 text-[.8125rem] text-textmuted">User ID: #1234 <span class="text-success ms-2 inline-block">Paid</span></p>
                                                        </div>
                                                        <div class="ms-auto w-[45%] text-[1rem] mt-2">
                                                            <div id="spark1" class="w-full rtl:rotate-180"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ti-list-group-item !border-t-0 !border-l-0 !border-r-0 font-medium">
                                            <div class="flex">
                                                <img class="avatar avatar-md avatar-rounded my-auto me-4" src="<?php echo e(asset('public/images/faces/11.jpg')); ?>" alt="Image description">
                                                <div class="flex-grow">
                                                    <div class="flex items-center">
                                                        <div class="mt-1">
                                                            <h5 class="mb-1 text-[.9375rem] leading-none">Jimmy Changa</h5>
                                                            <p class="mb-0 text-[.8125rem] text-textmuted">User ID: #1234 <span class="text-danger ms-2 inline-block">Pending</span></p>
                                                        </div>
                                                        <div class="ms-auto w-[45%] text-[1rem] mt-2">
                                                            <div id="spark2" class="w-full rtl:rotate-180"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ti-list-group-item !border-t-0 !border-l-0 !border-r-0 font-medium">
                                            <div class="flex">
                                                <img class="avatar avatar-md avatar-rounded my-auto me-4" src="<?php echo e(asset('public/images/faces/17.jpg')); ?>" alt="Image description">
                                                <div class="flex-grow">
                                                    <div class="flex items-center">
                                                        <div class="mt-1">
                                                            <h5 class="mb-1 text-[.9375rem] leading-none">Gabe Lackmen</h5>
                                                            <p class="mb-0 text-[.8125rem] text-textmuted">User ID: #1234 <span class="text-danger ms-2 inline-block">Pending</span></p>
                                                        </div>
                                                        <div class="ms-auto w-[45%] text-[1rem] mt-2">
                                                            <div id="spark3" class="w-full rtl:rotate-180"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ti-list-group-item !border-t-0 !border-l-0 !border-r-0 font-medium">
                                            <div class="flex">
                                                <img class="avatar avatar-md avatar-rounded my-auto me-4" src="<?php echo e(asset('public/images/faces/15.jpg')); ?>" alt="Image description">
                                                <div class="flex-grow">
                                                    <div class="flex items-center">
                                                        <div class="mt-1">
                                                            <h5 class="mb-1 text-[.9375rem] leading-none">Manuel Labor</h5>
                                                            <p class="mb-0 text-[.8125rem] text-textmuted">User ID: #1234 <span class="text-success ms-2 inline-block">Paid</span></p>
                                                        </div>
                                                        <div class="ms-auto w-[45%] text-[1rem] mt-2">
                                                            <div id="spark4" class="w-full rtl:rotate-180"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ti-list-group-item !border-t-0 !border-l-0 !border-r-0 font-medium">
                                            <div class="flex">
                                                <img class="avatar avatar-md avatar-rounded my-auto me-4" src="<?php echo e(asset('public/images/faces/6.jpg')); ?>" alt="Image description">
                                                <div class="flex-grow">
                                                    <div class="flex items-center">
                                                        <div class="mt-1">
                                                            <h5 class="mb-1 text-[.9375rem] leading-none">Sharon Needles</h5>
                                                            <p class="b-0 text-[.8125rem] text-textmuted mb-0">User ID: #1234 <span class="text-success ms-2 inline-block">Paid</span></p>
                                                        </div>
                                                        <div class="ms-auto w-[45%] text-[1rem] mt-2">
                                                            <div id="spark5" class="w-full rtl:rotate-180"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 md:col-span-12 lg:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header !border-b-0 !pb-0">
                                    <h3 class="box-title mb-2">Sales Activity</h3>
                                    <p class="text-[.75rem] mb-0 text-textmuted font-normal">Sales activities are the tactics that salespeople use to achieve their goals and objective</p>
                                </div>
                                <div class="product-timeline box-body !pt-3">
                                    <ul class="timeline-1 mb-0">
                                        <li class="!mt-0"> <i class="fe fe-pie-chart bg-primary-gradient text-fixed-white product-icon"></i> <span class="font-medium mb-4 text-[.875rem]">Total Products</span> <a href="javascript:void(0);" class="float-end text-[.6875rem] text-textmuted">3 days ago</a>
                                            <p class="mb-0 text-textmuted text-[.75rem]">1.3k New Products</p>
                                        </li>
                                        <li class="!mt-0"> <i class="fe fe-shopping-cart bg-danger-gradient text-fixed-white product-icon"></i> <span class="font-medium mb-4 text-[.875rem]">Total Sales</span> <a href="javascript:void(0);" class="float-end text-[.6875rem] text-textmuted">35 mins ago</a>
                                            <p class="mb-0 text-textmuted text-[.75rem]">1k New Sales</p>
                                        </li>
                                        <li class="!mt-0"> <i class="fe fe-bar-chart bg-success-gradient text-fixed-white product-icon"></i> <span class="font-medium mb-4 text-[.875rem]">Total Revenue</span> <a href="javascript:void(0);" class="float-end text-[.6875rem] text-textmuted">50 mins ago</a>
                                            <p class="mb-0 text-textmuted text-[.75rem]">23.5K New Revenue</p>
                                        </li>
                                        <li class="!mt-0"> <i class="fe fe-box bg-warning-gradient text-fixed-white product-icon"></i> <span class="font-medium mb-4 text-[.875rem]">Total Profit</span> <a href="javascript:void(0);" class="float-end text-[.6875rem] text-textmuted">1 hour ago</a>
                                            <p class="mb-0 text-textmuted text-[.75rem]">3k New profit</p>
                                        </li>
                                        <li class="!mt-0"> <i class="fe fe-eye bg-purple-gradient text-fixed-white product-icon"></i> <span class="font-medium mb-4 text-[.875rem]">Customer Visits</span> <a href="javascript:void(0);" class="float-end text-[.6875rem] text-textmuted">1 day ago</a>
                                            <p class="mb-0 text-textmuted text-[.75rem]">15% increased</p>
                                        </li>
                                        <li class="!mt-0 !mb-0"> <i class="fe fe-edit bg-primary-gradient text-fixed-white product-icon"></i> <span class="font-medium mb-4 text-[.875rem]">Customer Reviews</span> <a href="javascript:void(0);" class="float-end text-[.6875rem] text-textmuted">1 day ago</a>
                                            <p class="mb-0 text-textmuted text-[.75rem]">1.5k reviews</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 md:col-span-12 lg:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header !border-b-0 !pb-0">
                                    <h4 class="box-title mb-2">Recent Orders</h4>
                                    <p class="text-[.75rem] mb-0 text-textmuted font-normal">An order is an investor's instructions to a broker or brokerage firm to purchase or sell</p>
                                </div>
                                <div class="box-body sales-info !pb-0 !pt-0 !mt-0">
                                    <div id="chart" class="h-[150px]"></div>
                                    <div class="grid grid-cols-12 gap-x-6 sales-infomation pb-0 mb-0 mx-auto w-full">
                                        <div class="md:col-span-6 col-span-12 px-2">
                                            <p class="mb-0 flex"><span class="legend bg-primary !rounded-[0.13]"></span>Delivered</p>
                                            <h3 class="mb-1 leading-none">5238</h3>
                                            <div class="flex">
                                                <p class="text-textmuted mb-3">Last 6 months</p>
                                            </div>
                                        </div>
                                        <div class="md:col-span-6 col-span-12 px-2">
                                            <p class="mb-0 flex"><span class="legend bg-info !rounded-[0.13]"></span>Cancelled</p>
                                                <h3 class="mb-1 leading-none">3467</h3>
                                            <div class="flex">
                                                <p class="text-textmuted mb-3">Last 6 months</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box ">
                                <div class="box-body">
                                    <div class="grid grid-cols-12 gap-x-0 sm:gap-x-6">
                                        <div class="md:col-span-6 col-span-12">
                                            <div class="flex items-center pb-0">
                                                <p class="mb-0 text-[.875rem] leading-none">Total Sales</p>
                                            </div>
                                            <h4 class="font-bold mb-2 text-[1.5rem] !pt-2">$7,590</h4>
                                            <div class="progress progress-style progress-sm">
                                                <div class="progress-bar bar-1 bg-primary-gradient" style="width: 80%" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                                            </div>
                                        </div>
                                        <div class="md:col-span-6 col-span-12 mt-4 md:mt-0">
                                            <div class="flex items-center pb-0">
                                                <p class="mb-0 text-[.875rem] leading-none">Active Users</p>
                                            </div>
                                            <h4 class="font-bold mb-2 text-[1.5rem] !pt-2">$5,460</h4>
                                            <div class="progress progress-style progress-sm">
                                                <div class="progress-bar bar-2  bg-danger-gradient" style="width: 45%" role="progressbar"  aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="md:col-span-12 lg:col-span-4 xl:col-span-4 col-span-12">
                            <div class="box top-countries-card">
                                <div class="box-header !border-b-0 !p-0">
                                    <h4 class="box-title !mb-1">Your Top Countries</h4><span class="d-block text-textmuted font-normal text-[0.75rem] !mb-2">Sales performance revenue based by country</span>
                                </div>
                                <div class="ti-list-group border mt-2">
                                    <div class="ti-list-group-item leading-[1.1] !border-t-0 !px-0" id="br-t-0">
                                        <p>United States</p><span>$1,671.10</span>
                                    </div>
                                    <div class="ti-list-group-item leading-[1.1] !border-t-0 !px-0">
                                        <p>Netherlands</p><span>$1,064.75</span>
                                    </div>
                                    <div class="ti-list-group-item leading-[1.1] !border-t-0 !px-0">
                                        <p>United Kingdom</p><span>$1,055.98</span>
                                    </div>
                                    <div class="ti-list-group-item  leading-[1.1] !border-t-0 !px-0">
                                        <p>Canada</p><span>$1,045.49</span>
                                    </div>
                                    <div class="ti-list-group-item leading-[1.1] !border-t-0 !px-0">
                                        <p>India</p><span>$1,930.12</span>
                                    </div>
                                    <div class="ti-list-group-item leading-[1.1] !border-b-0 !border-t-0 !px-0 !mb-0">
                                        <p>Australia</p><span>$1,042.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="md:col-span-12 lg:col-span-8 xl:col-span-8 col-span-12">
                            <div class="box !p-[20px]">
                                <div class=" box-header !border-b-0 !p-0 flex justify-between">
                                    <h4 class="box-title mb-2">Your Most Recent Earnings</h4>
                                    <div class="hs-dropdown ti-dropdown">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="flex items-center justify-center w-[1.75rem] h-[1.75rem] !text-defaulttextcolor !text-[0.8rem] !py-1 !px-2 avatar-rounded border border-light shadow-none !font-[500]"
                                        data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-horizontal text-[0.8rem]"></i>
                                    </a>
                                    <ul class="hs-dropdown-menu ti-dropdown-menu hidden">
                                        <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                            href="javascript:void(0);">Action</a></li>
                                        <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                            href="javascript:void(0);">Another action</a></li>
                                        <li><a class="ti-dropdown-item !py-2 !px-[0.9375rem] !text-[0.8125rem] !font-[500] block"
                                            href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                    </div>
                                </div>
                                <span class="text-[0.75rem] text-textmuted mb-3 ">This is your most recent earnings for today's date.</span>
                                <div class="table-responsive country-table">
                                    <table class="table table-auto ti-custom-table table-striped table-bordered mb-0 text-nowrap w-full !border-defaultborder dark:!border-defaultborder/10">
                                        <thead>
                                            <tr>
                                                <th class="wd-lg-25p text-start !text-xs">Date</th>
                                                <th class="wd-lg-25p text-start !text-xs">Sales Count</th>
                                                <th class="wd-lg-25p text-start !text-xs">Earnings</th>
                                                <th class="wd-lg-25p text-start !text-xs">Tax Witheld</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="!font-normal">05 Jan 2024</td>
                                                <td class="font-medium">34</td>
                                                <td class="font-medium">$658.20</td>
                                                <td class="text-danger font-medium">-$45.10</td>
                                            </tr>
                                            <tr>
                                                <td class="!font-normal">06 Feb 2024</td>
                                                <td class="font-medium">26</td>
                                                <td class="font-medium">$453.25</td>
                                                <td class="text-danger font-medium">-$15.02</td>
                                            </tr>
                                            <tr>
                                                <td class="!font-normal">07 Mar 2024</td>
                                                <td class="font-medium">34</td>
                                                <td class="font-medium">$653.12</td>
                                                <td class="text-danger font-medium">-$13.45</td>
                                            </tr>
                                            <tr>
                                                <td class="!font-normal">08 Apr 2024</td>
                                                <td class="font-medium">45</td>
                                                <td class="font-medium">$546.47</td>
                                                <td class="text-danger font-medium">-$24.22</td>
                                            </tr>
                                            <tr>
                                                <td class="!font-normal">09 May 2024</td>
                                                <td class="font-medium">31</td>
                                                <td class="font-medium">$425.72</td>
                                                <td class="text-danger font-medium">-$25.01</td>
                                            </tr>
                                        </tbody>
                                    </table>
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
<?php endif; ?><?php /**PATH C:\xampp\htdocs\sync\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>