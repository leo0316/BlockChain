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


window.onload = function () {
	dialog = document.getElementById("dialog");
};

(function () {
	'use strict';
	//get current address
	//const currentAddress = web3.eth.defaultAccount;
	_Connect();	
	//balance();
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
			var title = "<th>課程編號</th>" +
				"<th>課程名稱</th>" +
				"<th>必選修　</th>" +
				"<th>教師　　</th>" +
				"<th>時間　　</th>" +
				"<th>教室　　</th>" +
				"<th>學分　　</th>" +
				"<th>限修人數</th>" +
				"<th>通識領域</th>" +
				"<th>備註　　</th>";
			document.getElementById('tb_body').insertAdjacentHTML('beforeend', title);
			for (var i in data) {
				//var datas = "\"" + data[i].course_code + "\"";
				
				str = "<tr><th>" +
					'<a href="javascript:void(0);" onclick="bid(\''+data[i].course_code+'\');">' + data[i].course_code + '</a></th>' +
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

var tmp;

function balance() {	
	var result = ContractInstance.balanceOf(currnetWallet, function (error, balanceOf) {
		if (!error)						
			tmp = balanceOf;					
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
						balance();
						viewCourse();
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

  function encryptPw(callback){
    var pw = document.getElementById("pw").value;
    var pw2 = document.getElementById("pw2").value;
    if(pw != pw2){
      alert("密碼輸入錯誤!!");
      return false;
    }else{      
      callback();
      return true;
    }
  }

  function setNewPw(pw,pw2){
    document.getElementById("pw").value = web3.sha3(pw);
    document.getElementById("pw2").value = web3.sha3(pw2);
  }


var hashValue;

function bid(courseCode){
	var money = prompt('請輸入投標金額:');
	if (money == null)
		return;
	dataToHash = courseCode+','+money+','+currnetWallet;
	hashValue = web3.sha3(dataToHash);
	console.log("dataToHash: " + dataToHash);
	console.log("hashValue: " + hashValue);

	var result = ContractInstance.StoreHashValue(hashValue, function (error, result) {
		if (!error){
			document.getElementById("money").innerText = (document.getElementById("money").innerText-money);
			updateInfo();
			// console.log(JSON.stringify(result));
			$.ajax({
				type: "POST",
				url: "bid.php",
				async: true,
				data: {
					'course_code': courseCode,
					'money': money,
					'wallet': currnetWallet,
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
		} else {
			console.error(error);
		}
	});
}

function getTurn(callback){ 
	ContractInstance.turn.call(function (e, r){callback(r.c[0]);});
}






