(function () {
    "use strict";
    document.addEventListener('DOMContentLoaded', function () {
        var genericExamples = document.querySelectorAll('[data-trigger]');
        for (let i = 0; i < genericExamples.length; ++i) {
            var element = genericExamples[i];
            new Choices(element, {
                allowHTML: false,
            });
        }
    });

    var tabledata = [
        {id:1,vendor_name:"Tiger Jackson",type:"USA",address1:"Botanical Garden",address2:"Sector37",city:"Noida",state:"UttarPradesh",zip:"201301"},
        {id:2,vendor_name:"Amit Sharma",type:"India",address1:"MG Road",address2:"DLFPhase2",city:"Gurgaon",state:"Haryana",zip:"122002"},
        {id:3,vendor_name:"John Miller",type:"USA",address1:"5th Avenue",address2:"Midtown",city:"NewYork",state:"NewYork",zip:"10001"},
        {id:4,vendor_name:"Ravi Verma",type:"India",address1:"Ring Road",address2:"LajpatNagar",city:"Delhi",state:"Delhi",zip:"110024"},
        {id:5,vendor_name:"Sophia Brown",type:"UK",address1:"Oxford Street",address2:"WestEnd",city:"London",state:"England",zip:"W1D1BS"},
        {id:6,vendor_name:"Daniel Wilson",type:"Canada",address1:"Queen Street",address2:"Downtown",city:"Toronto",state:"Ontario",zip:"M5H2N2"},
        {id:7,vendor_name:"Neha Gupta",type:"India",address1:"Civil Lines",address2:"Alambagh",city:"Lucknow",state:"UttarPradesh",zip:"226005"},
        {id:8,vendor_name:"Carlos Martinez",type:"Mexico",address1:"Reforma Avenue",address2:"Centro",city:"MexicoCity",state:"CDMX",zip:"06500"},
        {id:9,vendor_name:"Michael Scott",type:"USA",address1:"Slough Avenue",address2:"BusinessPark",city:"Scranton",state:"Pennsylvania",zip:"18503"},
        {id:10,vendor_name:"Anjali Mehta",type:"India",address1:"SG Highway",address2:"Satellite",city:"Ahmedabad",state:"Gujarat",zip:"380015"},
        {id:11,vendor_name:"Robert King",type:"USA",address1:"Market Street",address2:"SoMa",city:"SanFrancisco",state:"California",zip:"94103"},
        {id:12,vendor_name:"Pooja Singh",type:"India",address1:"Boring Road",address2:"Patliputra",city:"Patna",state:"Bihar",zip:"800013"},
        {id:13,vendor_name:"Liam Anderson",type:"Australia",address1:"George Street",address2:"CBD",city:"Sydney",state:"NewSouthWales",zip:"2000"},
        {id:14,vendor_name:"Harpreet Kaur",type:"India",address1:"GT Road",address2:"ModelTown",city:"Ludhiana",state:"Punjab",zip:"141002"},
        {id:15,vendor_name:"Emma Watson",type:"UK",address1:"Baker Street",address2:"Marylebone",city:"London",state:"England",zip:"NW16XE"},
        {id:16,vendor_name:"Suresh Reddy",type:"India",address1:"Banjara Hills",address2:"Road12",city:"Hyderabad",state:"Telangana",zip:"500034"},
        {id:17,vendor_name:"David Lee",type:"Singapore",address1:"Orchard Road",address2:"Somerset",city:"Singapore",state:"CentralRegion",zip:"238839"},
        {id:18,vendor_name:"Kavita Nair",type:"India",address1:"MG Road",address2:"Edapally",city:"Kochi",state:"Kerala",zip:"682024"},
        {id:19,vendor_name:"Oliver Smith",type:"UK",address1:"High Street",address2:"Camden",city:"London",state:"England",zip:"NW17JR"},
        {id:20,vendor_name:"Rahul Chatterjee",type:"India",address1:"Salt Lake",address2:"SectorV",city:"Kolkata",state:"WestBengal",zip:"700091"},
        {id:21,vendor_name:"Ethan Hunt",type:"USA",address1:"Sunset Boulevard",address2:"Hollywood",city:"LosAngeles",state:"California",zip:"90028"},
        {id:22,vendor_name:"Manoj Patil",type:"India",address1:"FC Road",address2:"Shivajinagar",city:"Pune",state:"Maharashtra",zip:"411005"},
        {id:23,vendor_name:"Isabella Rossi",type:"Italy",address1:"Via Roma",address2:"Centro",city:"Rome",state:"Lazio",zip:"00100"},
        {id:24,vendor_name:"Vikram Malhotra",type:"India",address1:"Link Road",address2:"AndheriWest",city:"Mumbai",state:"Maharashtra",zip:"400058"},
        {id:25,vendor_name:"Noah Johnson",type:"USA",address1:"Michigan Avenue",address2:"Downtown",city:"Chicago",state:"Illinois",zip:"60611"}
    ];

    var table = new Tabulator("#basic-table", {
        width: 100,
        minWidth: 100,
        layout: "fitColumns",
        pagination: "local",
        paginationSize: 10,
        paginationSizeSelector: [5, 10, 15, 20, 25],
        paginationCounter: "rows",
        data: tabledata,
        columns: [
            { title: "Name", field: "name", sorter: "string"},
            { title: "Position", field: "position", sorter: "string" },
            { title: "Office", field: "office", sorter: "string" },
            { title: "Age", field: "age", sorter: "number" },
            { title: "Salary", field: "salary", sorter: "string" },
        ],
    });

    var fieldEl = document.getElementById("sort-field");
    var dirEl = document.getElementById("sort-direction");
    var table1 = new Tabulator("#sort-table", {
        width: 40,
        minWidth: 30,
        layout: "fitColumns",
        pagination: "local",
        paginationSize: 10,
        paginationSizeSelector: [5, 10, 20, 30, 40, 50, 60],
        paginationCounter: "rows",
        movableColumns: true,
        data: tabledata, 
        columns: [
            { title: "S.No", field: "id", sorter: "string"},
            { title: "Vendor Name", field: "vendor_name", sorter: "string"},
            { title: "Type", field: "type", sorter: "string"},
            { title: "address1", field: "address1", sorter: "string"},
            { title: "address2", field: "address2", sorter: "number"},
            { title: "City", field: "city", sorter: "string"},
            { title: "State", field: "state", sorter: "string"},
            { title: "Zip Code", field: "zip", sorter: "string"},
        ],

    });
    document.getElementById("sort-trigger").addEventListener("click", function () {
        table1.setSort(fieldEl.options[fieldEl.selectedIndex].value, dirEl.options[dirEl.selectedIndex].value);
    });

    var table1 = new Tabulator("#reactivity-table", {
        width: 100,
        minWidth: 40,
        layout: "fitColumns",
        pagination: "local",
        paginationSize: 10,
        paginationSizeSelector: [5, 10, 15, 20, 25],
        paginationCounter: "rows",
        movableColumns: true,
        addRowPos:"top",
        reactiveData: true, 
        data: tabledata, 
        columns: [
            { title: "Name", field: "name", sorter: "string"},
            { title: "Position", field: "position", sorter: "string"},
            { title: "Office", field: "office", sorter: "string"},
            { title: "Age", field: "age", sorter: "number"},
            { title: "Salary", field: "salary", sorter: "string"},
        ],
    });

    document.getElementById("reactivity-add").addEventListener("click", function () {
        table1.addRow({ name: "Added a New Row", position: "New", Office: "New" });
    });

    document.getElementById("reactivity-delete").addEventListener("click", function () {
        if(document.getElementById("reactivity-table").children[1].children[0].children[0]){
            if(document.getElementById("reactivity-table").children[1].children[0].children[0].childNodes.length > 0){
               tabledata.pop();
            }
        }
    });

    document.getElementById("clear").addEventListener("click", function () {
        table1.clearData();
    });

    document.getElementById("reset").addEventListener("click", function () {
        table1.addRow({ name: "Added a New Row", position: "New", Office: "New" });
        table1.setData(tabledata);
    });

    var table = new Tabulator("#download-table", {
        width: 100,
        minWidth: 40,
        layout: "fitColumns",
        pagination: "local",
        paginationSize: 10,
        paginationSizeSelector: [5, 10, 15, 20, 25],
        paginationCounter: "rows",
        movableColumns: true,
        reactiveData: true, 
        data: tabledata, 
        columns: [
            { title: "Name", field: "name", sorter: "string"},
            { title: "Position", field: "position", sorter: "string"},
            { title: "Office", field: "office", sorter: "string"},
            { title: "Age", field: "age", sorter: "number"},
            { title: "Salary", field: "salary", sorter: "string"},
        ],
    });

    document.getElementById("download-csv").addEventListener("click", function () {
        table.download("csv", "data.csv");
    });

    document.getElementById("download-json").addEventListener("click", function () {
        table.download("json", "data.json");
    });

    document.getElementById("download-xlsx").addEventListener("click", function () {
        table.download("xlsx", "data.xlsx", { sheetName: "My Data" });
    });

    document.getElementById("download-pdf").addEventListener("click", function () {
        table.download("pdf", "data.pdf", {
            orientation: "portrait", 
            title: "Example Report", 
        });
    });

    document.getElementById("download-html").addEventListener("click", function () {
        table.download("html", "data.html", { style: true });
    });

    document.querySelector("#switcher-rtl").addEventListener("click",()=>{
        document.querySelectorAll(".tabulator").forEach((ele)=>{
            ele.classList.add("tabulator-rtl")
        })
    })

    document.querySelector("#switcher-ltr").addEventListener("click",()=>{
        document.querySelectorAll(".tabulator").forEach((ele)=>{
            ele.classList.remove("tabulator-rtl")
        })
    })

    document.querySelector("#reset-all").addEventListener("click",()=>{
        document.querySelectorAll(".tabulator").forEach((ele)=>{
            ele.classList.remove("tabulator-rtl")
        })
    })

})();