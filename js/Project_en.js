var MyContract = web3.eth.contract([
	{
		"constant": false,
		"inputs": [
			{
				"name": "_courseCode",
				"type": "string"
			},
			{
				"name": "courseName",
				"type": "string"
			},
			{
				"name": "studentLimit",
				"type": "uint256"
			}
		],
		"name": "addCourses",
		"outputs": [
			{
				"name": "",
				"type": "bool"
			}
		],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "_courseCode",
				"type": "string"
			},
			{
				"name": "tokens",
				"type": "uint256"
			}
		],
		"name": "bid",
		"outputs": [
			{
				"name": "",
				"type": "bool"
			}
		],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [],
		"name": "ChangeTurn",
		"outputs": [
			{
				"name": "",
				"type": "bool"
			}
		],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": false,
				"name": "turn",
				"type": "uint256"
			},
			{
				"indexed": false,
				"name": "classCode",
				"type": "bytes32"
			},
			{
				"indexed": false,
				"name": "classname",
				"type": "string"
			},
			{
				"indexed": false,
				"name": "studentlimit",
				"type": "uint256"
			}
		],
		"name": "classes",
		"type": "event"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "courseCode",
				"type": "bytes32"
			}
		],
		"name": "settlement",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "source",
				"type": "string"
			}
		],
		"name": "stringToBytes32",
		"outputs": [
			{
				"name": "result",
				"type": "bytes32"
			}
		],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"constant": false,
		"inputs": [
			{
				"name": "to",
				"type": "address"
			},
			{
				"name": "courseNum",
				"type": "uint256"
			},
			{
				"name": "GPA",
				"type": "uint256"
			},
			{
				"name": "isNew",
				"type": "uint256"
			}
		],
		"name": "transfer",
		"outputs": [
			{
				"name": "success",
				"type": "bool"
			}
		],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": false,
				"name": "turn",
				"type": "uint256"
			},
			{
				"indexed": false,
				"name": "classCode",
				"type": "bytes32"
			},
			{
				"indexed": false,
				"name": "index",
				"type": "uint256"
			},
			{
				"indexed": false,
				"name": "winner",
				"type": "address"
			},
			{
				"indexed": false,
				"name": "tokens",
				"type": "uint256"
			}
		],
		"name": "Winning_bidder",
		"type": "event"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": true,
				"name": "from",
				"type": "address"
			},
			{
				"indexed": true,
				"name": "to",
				"type": "address"
			},
			{
				"indexed": false,
				"name": "tokens",
				"type": "uint256"
			}
		],
		"name": "Transfer",
		"type": "event"
	},
	{
		"inputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "constructor"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"name": "_ClassAvailable",
		"outputs": [
			{
				"name": "",
				"type": "bytes32"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "",
				"type": "bytes32"
			}
		],
		"name": "_courses",
		"outputs": [
			{
				"name": "",
				"type": "string"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "",
				"type": "uint256"
			},
			{
				"name": "",
				"type": "bytes32"
			}
		],
		"name": "_studentLimit",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "_totalSupply",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "",
				"type": "uint256"
			},
			{
				"name": "",
				"type": "uint256"
			}
		],
		"name": "_turns",
		"outputs": [
			{
				"name": "",
				"type": "bytes32"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "",
				"type": "uint256"
			},
			{
				"name": "",
				"type": "bytes32"
			},
			{
				"name": "",
				"type": "uint256"
			}
		],
		"name": "_winners",
		"outputs": [
			{
				"name": "",
				"type": "address"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "",
				"type": "uint256"
			},
			{
				"name": "",
				"type": "bytes32"
			},
			{
				"name": "",
				"type": "uint256"
			}
		],
		"name": "_winnersBids",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "",
				"type": "bytes32"
			}
		],
		"name": "_WinnersTotalNumber",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "tokenOwner",
				"type": "address"
			}
		],
		"name": "balanceOf",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "courseNum",
				"type": "uint256"
			},
			{
				"name": "GPA",
				"type": "uint256"
			},
			{
				"name": "isNew",
				"type": "uint256"
			}
		],
		"name": "calculateGPA",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "pure",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "coursecounter",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "_courseCode",
				"type": "string"
			},
			{
				"name": "tokenOwner",
				"type": "address"
			}
		],
		"name": "haveBid",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "owner",
		"outputs": [
			{
				"name": "",
				"type": "address"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [
			{
				"name": "_courseCode",
				"type": "string"
			}
		],
		"name": "searchCourses",
		"outputs": [
			{
				"name": "",
				"type": "string"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "totalSupply",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	},
	{
		"constant": true,
		"inputs": [],
		"name": "turn",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			}
		],
		"payable": false,
		"stateMutability": "view",
		"type": "function"
	}
]);
var ContractInstance = MyContract.at('0x5a224304ff4c008fc9ec0b7f0073abeb09f00f89');
var currnetWallet;

window.onload = function () {
	dialog = document.getElementById("dialog");
};

(function () {
	'use strict';
	//get current address
	//const currentAddress = web3.eth.defaultAccount;
	_Connect();	
	var web3Provider;
	if (window.ethereum) {
		web3Provider = window.ethereum;
		try {
			window.ethereum.enable();
		} catch (error) {
			console.error("User denied account access");
		}
	} else if (window.web3) {
		web3Provider = window.web3.currentProvider;
	} else {
		web3Provider = new Web3.providers.HttpProvider('http://localhost:8545');
	}
	web3 = new Web3(web3Provider);
}());

//開課查詢
function showDialog() {
	dialog.style.display = "block";
}

function closeDialog() {
	dialog.style.display = "none";
}

function departmentSelect(name) {
	var ini = document.getElementById('tb_body');
	ini.innerHTML = '';

	var URLs = "course.php";
	$.ajax({
		type: "POST",
		url: URLs,
		async: true,
		data: {
			'department': name
		},
		datatype: 'JSON',
		success: function (msg) {

			var data = JSON.parse(msg);
			var str;
			var title = "<th>Course No</th>" +
				"<th>Course</th>" +
				"<th>Mandatory</th>" +
				"<th>Teacher</th>" +
				"<th>Time</th>" +
				"<th>Classroom</th>" +
				"<th>Credit</th>" +
				"<th>Limitation</th>" +
				"<th>General</th>" +
				"<th>Note</th>";
			document.getElementById('tb_body').insertAdjacentHTML('beforeend', title);
			for (var i in data) {
				var datas = "\"" + data[i].course_code + "\"";
				str = "<tr><th>" +
					"<a href=javascript:void(0); onclick=bid(" + datas + ");>" + data[i].course_code + "</a></th>" +
					"<th>" + data[i].course_name + "</th>" +
					"<th>" + data[i].required_ornot + "</th>" +
					"<th>" + data[i].teacher + "</th>" +
					"<th>" + data[i].time + "</th>" +
					"<th>" + data[i].classroom + "</th>" +
					"<th>" + data[i].credit + "</th>" +
					"<th>" + data[i].max_student + "</th>" +
					"<th>" + data[i].field + "</th>" +
					"<th>" + data[i].PS + "</th></tr>";
				document.getElementById('tb_body').insertAdjacentHTML('beforeend', str);
			}

		},
		error: function (xhr, ajaxOptions, thrownError) {
			alert(xhr.status);
			alert(thrownError);
		}
	});
}


function bid(course_code) {
	var money = prompt('請輸入投標金額:');
	var result = ContractInstance.bid(course_code, money, function (error, bid) {
		if (!error)
			console.log(JSON.stringify(bid));
		else {
			console.error(error);
		}

	});
}

function balance() {
	//var a = document.getElementById("text5").value;
	var result = ContractInstance.balanceOf(currnetWallet, function (error, balanceOf) {
		if (!error)
			document.getElementById("text5").value = balanceOf;
		else
			console.error(error);
	});
}

function _Connect(callback) {
	if (typeof web3 !== 'undefined') {
		web3 = new Web3(window.web3.currentProvider);
		web3.version.getNetwork((err, netId) => {
			switch (netId) {
				case "1":
					callback('Switch Network', null);
					break;
				case "2":
					console.log('This is the deprecated Morden test network.');
					callback('Switch Network', null);
					break;
				case "3":
					console.log('Connected to the ropsten test network.');
					web3.eth.defaultAccount = web3.eth.accounts[0];
					if (!web3.eth.defaultAccount) {
						console.log('Log into metamask');
						_Connect(callback);
					} else {
						// Success
						console.log('Web3 ETH Account: ${web3.eth.defaultAccount}');
						callback(false, web3.eth.defaultAccount);
					}
					break;
				case "4":
					console.log('Connected to the rinkeby test network.');
					web3.eth.defaultAccount = web3.eth.accounts[0];
					currnetWallet = web3.eth.defaultAccount;
					if (!web3.eth.defaultAccount) {
						console.log('Log into metamask');
						_Connect(callback);
					} else {
						// Success
						console.log(web3.eth.defaultAccount);
						//document.getElementById("wallet").value = currnetWallet;
						//callback(false, web3.eth.defaultAccount);
					}
					break;
				default:
					console.log('This is an unknown network.');
					callback('Switch Network', null);
			}
		});
	} else {
		console.log('Failed: Web3 instance required, try using MetaMask.');
		callback('Install Metamask', null);
	}
}
