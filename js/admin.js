var MyContract = web3.eth.contract([
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
		"constant": false,
		"inputs": [
			{
				"name": "to",
				"type": "address"
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
		"constant": true,
		"inputs": [
			{
				"name": "turnLocal",
				"type": "uint256"
			},
			{
				"name": "index",
				"type": "uint256"
			},
			{
				"name": "tokenOwner",
				"type": "address"
			}
		],
		"name": "bidInformation",
		"outputs": [
			{
				"name": "",
				"type": "uint256"
			},
			{
				"name": "",
				"type": "string"
			},
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
		"constant": false,
		"inputs": [
			{
				"name": "hashvalue",
				"type": "bytes32"
			}
		],
		"name": "StoreHashValue",
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
		"constant": true,
		"inputs": [
			{
				"name": "turn",
				"type": "uint256"
			},
			{
				"name": "acount",
				"type": "address"
			},
			{
				"name": "index",
				"type": "uint256"
			}
		],
		"name": "GetCourseData",
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
				"name": "turnLocal",
				"type": "uint256"
			},
			{
				"name": "tokenOwner",
				"type": "address"
			},
			{
				"name": "index",
				"type": "uint256"
			}
		],
		"name": "winlist",
		"outputs": [
			{
				"name": "",
				"type": "string"
			},
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
				"components": [
					{
						"name": "courseCode",
						"type": "string"
					},
					{
						"name": "hexCode",
						"type": "bytes32"
					},
					{
						"name": "studentLimit",
						"type": "uint256"
					},
					{
						"name": "courseName",
						"type": "string"
					}
				],
				"name": "courseinfo",
				"type": "tuple"
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
		"constant": false,
		"inputs": [
			{
				"name": "courseCode",
				"type": "string"
			},
			{
				"name": "bid1",
				"type": "uint256"
			},
			{
				"name": "String",
				"type": "string"
			},
			{
				"name": "hashvalue",
				"type": "bytes32"
			},
			{
				"name": "courseName",
				"type": "string"
			},
			{
				"name": "studentLimit",
				"type": "uint256"
			},
			{
				"name": "student",
				"type": "address"
			}
		],
		"name": "inputHiddenBid",
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
		"inputs": [],
		"payable": false,
		"stateMutability": "nonpayable",
		"type": "constructor"
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
	}
]);
var ContractInstance = MyContract.at('0x9294eba4682bcf5358282837a6b0504444a4977f');
var currnetWallet;

(function () {
	'use strict';
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


function balance(stdWallet) {	
	var result = ContractInstance.balanceOf(stdWallet, function (error, balance) {
		console.log(stdWallet);
		if (!error){
			document.getElementById("balanceAddr").value = balance.c[0];
		}else
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
						//balance();
						//viewCourse();
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

var hashValue;
function getTurn(callback){ 
	ContractInstance.turn.call(function (e, r){callback(r.c[0]);});
}


function haveBid(){
	var a = document.getElementById("text12").value;
	var b = document.getElementById("text13").value;
	var result = ContractInstance.haveBid(a,b,function(error, haveBid){
		 if(!error)
				 console.log(JSON.stringify(document.getElementById("text12").value = haveBid));
		 else
				 console.error(error);
	});
}

function transfer(stdAddress){
    ContractInstance.transfer(stdAddress,function(error, result){
        if(result)
            console.log("Transfer success");
        else
            console.log("Transfer error");
    });
}

//(string courseCode, uint bid1,string String,bytes32 hashvalue, string courseName, uint studentLimit,address student)
function inputHiddenBid(courseCode, money, hash, hashValue, courseName, stdLimit, accountAddress){
	console.log(courseCode, money, hash, hashValue, courseName, stdLimit, accountAddress);
    ContractInstance.inputHiddenBid(courseCode, money, hash, hashValue, courseName, stdLimit, accountAddress, function(error, result){
		if (!error)
			if(result) {
				console.log("inputHiddenBid result success");
				document.getElementById(hashValue).hidden = true;
				$.ajax({
					type: "POST",
					url: "confirm.php",
					async: true,
					data: {
						'course_code': courseCode,
						'wallet': accountAddress,
						'hash_value': hashValue,
					},
					datatype: 'JSON',
					success: function (msg) {
						var data = JSON.parse(msg);
						console.log(msg);
					},
					error: function (xhr, ajaxOptions, thrownError) {
						alert(xhr.status);
						alert(thrownError);
					}
				});
			} else
				console.log("inputHiddenBid result failed");
		else
			console.log("inputHiddenBid error: " + error);
    });
}


function changeTurn(){
    var result = ContractInstance.ChangeTurn(function(error, result){
        if(!error)
                console.log(JSON.stringify(result));
        else
                console.error(error);
    });
}

function searchCourses(){
    var courseCode = document.getElementById("courseCode").value;
    var result = ContractInstance.searchCourses(courseCode,function(error, searchCourses){
        if(!error)
                console.log(JSON.stringify(document.getElementById("courseCode").value = searchCourses));
        else
                console.error(error);
    });
}




