// playground requires you to assign document definition to a variable called dd

var fonts = {
	Anton: {
		normal: 'fonts/Anton-Regular.ttf',
	}
};



var dd = {
	watermark: {text: '  UNWOUND   ', color: 'red',size: 1,alignment: 'center', opacity: 0.2, bold: true, italics: false, pageMargins: [62,80,62,80],},
	content: [
	    
	    

	{
		alignment: 'right',
		columns: [
        {
            text: 'CARWAVE',
            style: 'branding'
        },
		{
			style: 'textSM',
			text: 'Phone: 844-428-9638 | Email: admin@carwave.com',
		},
		]
	},

	{
		style: 'tableExample',
		table: {
			widths: ['100%'],
			body: [
			[
			{
				type: 'none',
				style: 'listStyle',
				ul: [
				{
					style: 'textDanger',
					text:'Important Instructions: Please send payment within 2 business days after receiving vehicle. ',
				},
				
				{
					style: 'textDanger',
					text:'\nMake check payable to:',
				},
				
				{
					style: 'textDanger',
					text:'CARWAVE  855 North Broadway,',
				},
				
				{
					style: 'textDanger',
					text:'Suite 100 Escondido, CA 92025',
				},
				]
			},
			]
			]
		},
		layout: {
			fillColor: function (rowIndex, node, columnIndex) {
				return (rowIndex % 2 === 0) ? '#ebccd1' : null;
			},
			hLineWidth: function (i, node) {
				return (i === 0 || i === node.table.body.length) ? 1 : 1;
			},
			vLineWidth: function (i, node) {
				return (i === 0 || i === node.table.widths.length) ? 1 : 1;
			},
			hLineColor: function (i, node) {
				return (i === 0 || i === node.table.body.length) ? '#a94442' : '#a94442';
			},
			vLineColor: function (i, node) {
				return (i === 0 || i === node.table.widths.length) ? '#a94442' : '#a94442';
			},
		}
	},



	{
		style: 'tableExample',
		table: {
			headerRows: 1,
        // dontBreakRows: true,
        // keepWithHeaderRows: 1,
        widths: ['100%'],
        body: [
        [
        {
        	alignment: 'left',
        	columns: [
        	{
        		type: 'none',
        		style: 'padded',
        		stack: [
        		{
        			columns: [
        			{
        				text: 'Year:'
        			},
        			{
        				text: '2018'
        			}
        			]

        		},
        		{
        			columns: [
        			{
        				text: 'Make:'
        			},
        			{
        				text: 'Kia'
        			}
        			]

        		},
        		{
        			columns: [
        			{
        				text: 'Model:'
        			},
        			{
        				text: 'Forte LX'
        			}
        			]
        		},
        		{
        			columns: [
        			{
        				text: 'Trim:'
        			},
        			{
        				text: 'Sedan 4D FWD'
        			}
        			]
        		},
        		{
        			columns: [
        			{
        				text: 'Odometer:'
        			},
        			{
        				text: '12,000 mi'
        			}
        			]
        		}

        		]  
        	},
        	
        	{
        		type: 'none',
        		style: 'padded',
        		stack: [
        		{
        			columns: [
        			{
        				text: 'Color:'
        			},
        			{
        				text: 'Silver/Gray'
        			}
        			]

        		},
        		{
        			columns: [
        			{
        				text: 'VIN:'
        			},
        			{
        				text: 'HY237HS7953987765'
        			}
        			]

        		},
        		{
        			columns: [
        			{
        				text: 'Stock Number:'
        			},
        			{
        				text: '12345HG'

        			}

        			]
        		},
        		{
        			columns: [
        			{
        				text: 'License Plate Number:'
        			},
        			{
        				text: 'WG2567'

        			}

        			]
        		}
        		

        		]  
        	}


        	

        	]
        },
        
        ]
        ]
      },
      layout: {
      	hLineWidth: function (i, node) {
      		return (i === 0 || i === node.table.body.length) ? 1 : 1;
      	},
      	vLineWidth: function (i, node) {
      		return (i === 0 || i === node.table.widths.length) ? 1 : 1;
      	},
      	hLineColor: function (i, node) {
      		return (i === 0 || i === node.table.body.length) ? 'gray' : 'gray';
      	},
      	vLineColor: function (i, node) {
      		return (i === 0 || i === node.table.widths.length) ? 'gray' : 'gray';
      	},
        // hLineStyle: function (i, node) { return {dash: { length: 10, space: 4 }}; },
        // vLineStyle: function (i, node) { return {dash: { length: 10, space: 4 }}; },
        // paddingLeft: function(i, node) { return 4; },
        // paddingRight: function(i, node) { return 4; },
        // paddingTop: function(i, node) { return 2; },
        // paddingBottom: function(i, node) { return 2; },
        // fillColor: function (rowIndex, node, columnIndex) { return null; }
      }
    },



    {
    	style: 'tableExample',
    	table: {
    		headerRows: 1,
        // dontBreakRows: true,
        // keepWithHeaderRows: 1,
        widths: ['50%', '50%'],
        body: [
        [{text: 'Buyer', style: 'tableHeader'}, {text: 'Seller', style: 'tableHeader'}],
        [
        {
        	type: 'none',
        	style: 'padded',
        	stack: [
        	'Nissan of Vacaville',
        	'Ryan Farina',
        	'671 Orange Dr, Vacaville, CA 95687',
        	'619-280-4100',
        	'\nDMV Clerk Information:',
        	'Kelly Grewer',
        	'Phone: 714-832-3111',
        	'Fax: 714-669-8900',
        	'Dealer License #: 57709',
        	'Auction Access 5 million #: 5189105'
        	]
        },
        {
        	type: 'none',
        	style: 'padded',
        	stack: [
        	'Pacific Honda',
        	'Adam Harris',
        	'4761 Convoy St, San Diego, CA 92111',
        	'707-455-4500',
        	'\nDMV Clerk Information:',
        	'Mohammad Abaali',
        	'Phone: 562-690-1141',
        	'Fax: 562-697-7294',
        	'Dealer License #: 31713',
        	'Auction Access 5 million #: 5113022'
        	]
        },
        ]
        ]
      },
      layout: {
      	hLineWidth: function (i, node) {
      		return (i === 0 || i === node.table.body.length) ? 1 : 1;
      	},
      	vLineWidth: function (i, node) {
      		return (i === 0 || i === node.table.widths.length) ? 1 : 1;
      	},
      	hLineColor: function (i, node) {
      		return (i === 0 || i === node.table.body.length) ? 'gray' : 'gray';
      	},
      	vLineColor: function (i, node) {
      		return (i === 0 || i === node.table.widths.length) ? 'gray' : 'gray';
      	},
        // hLineStyle: function (i, node) { return {dash: { length: 10, space: 4 }}; },
        // vLineStyle: function (i, node) { return {dash: { length: 10, space: 4 }}; },
        // paddingLeft: function(i, node) { return 4; },
        // paddingRight: function(i, node) { return 4; },
        // paddingTop: function(i, node) { return 2; },
        // paddingBottom: function(i, node) { return 2; },
        // fillColor: function (rowIndex, node, columnIndex) { return null; }
      }
    },




    {
    	style: 'tableExample',
    	table: {
    		headerRows: 1,
        // dontBreakRows: true,
        // keepWithHeaderRows: 1,
        body: [
        [{text: 'Transaction Details', style: 'tableHeader'}],
        [
        {
        	alignment: 'left',
        	columns: [
        	{
        		type: 'none',
        		style: 'padded',
        		stack: [
        		{
        			columns: [
        			{
        				text: 'Purchase Date:'
        			},
        			{
        				alignment: 'right',
        				text: 'July 29, 2018'
        			}
        			]

        		},
        		{
        			columns: [
        			{
        				text: 'Payment Method:'
        			},
        			{
        				alignment: 'right',
        				text: 'TDF Guarantee '
        			}
        			]

        		},
        		{
        			columns: [
        			{
        				text: 'Facilitating Location:'
        			},
        			{
        				alignment: 'right',
        				text: 'CARWAVE 855 North Broadway, Suite 100 Escondido, CA 92025'
        			}
        			]

        		}
        		]  
        	},
        	
        	{
        		type: 'none',
        		style: 'padded',
        		stack: [
        		{
        			columns: [
        			{
        				text: 'Purchase Price:'
        			},
        			{
        				alignment: 'right',
        				text: '$25,000'
        			}
        			]

        		},
        		{
        			columns: [
        			{
        				text: 'Facilitation Fee:'
        			},
        			{
        				alignment: 'right',
        				text: '$125'
        			}
        			]

        		},
        		{
        			columns: [
        			{
        				text: 'Total:',
        				style: 'totalPrice'
        			},
        			{
        				alignment: 'right',
        				text: '$25,125',
        				style: 'totalPrice',

        			}

        			]
        		},
        		{
        			columns: [
        			{
        				text: 'Both parties agree to CARWAVE Guidelines Terms and Conditions.',
        				style: 'textSM',
        				italics: true
        			},

        			]

        		}

        		]  
        	}


        	

        	]
        },
        
        ]
        ]
      },
      layout: {
      	hLineWidth: function (i, node) {
      		return (i === 0 || i === node.table.body.length) ? 1 : 1;
      	},
      	vLineWidth: function (i, node) {
      		return (i === 0 || i === node.table.widths.length) ? 1 : 1;
      	},
      	hLineColor: function (i, node) {
      		return (i === 0 || i === node.table.body.length) ? 'gray' : 'gray';
      	},
      	vLineColor: function (i, node) {
      		return (i === 0 || i === node.table.widths.length) ? 'gray' : 'gray';
      	},
        // hLineStyle: function (i, node) { return {dash: { length: 10, space: 4 }}; },
        // vLineStyle: function (i, node) { return {dash: { length: 10, space: 4 }}; },
        // paddingLeft: function(i, node) { return 4; },
        // paddingRight: function(i, node) { return 4; },
        // paddingTop: function(i, node) { return 2; },
        // paddingBottom: function(i, node) { return 2; },
        // fillColor: function (rowIndex, node, columnIndex) { return null; }
      }
    },
    
    
    {
    	style: 'tableExample',
    	pageBreak: 'before',
    	table: {
    		headerRows: 1,
        // dontBreakRows: true,
        // keepWithHeaderRows: 1,
        widths: ['100%'],
        body: [
        [
        {
        	stack: [
        	{
        		text: '\nWholesale Lending/Retail Breakdown \nKelley Blue Book',
        		style: 'header',
        		alignment: 'center'
        	},
        	{
        		text: 'Effective dates: 06/22/2018 -06/28/2018',
        		alignment: 'center'
        	},
        	{
        		text: ' \nZip Code 92111 \n 2018 Kia Forte LX Sedan 4D	$14,744/$17,479',
        		alignment: 'center'
        	},
        	{
        		text: '\n 4-Cyl, 2.0 Liter - Included',
        		alignment: 'center'
        	},
        	{
        		text: 'Automatic, 6-Spd w/Sportmatic - Included',
        		alignment: 'center'
        	},
        	{
        		text: 'FWD - Included',
        		alignment: 'center'
        	},
        	
        	
        	{
        		columns: [
        		{
        			type: 'none',
        			style: 'padded',
        			stack: [
        			
        			{
        				columns: [
        				{
        					text: 'Hill Start Assist Control'
        				},
        				{
        					text: 'Included',
        					alignment: 'right'
        				}
        				]

        			},
        			{
        				columns: [
        				{
        					text: 'Traction Control'
        				},
        				{
        					text: 'Included',
        					alignment: 'right'
        				}
        				]

        			},
        			{
        				columns: [
        				{
        					text: 'Electronic Stability Control'
        				},
        				{
        					text: 'Included',
        					alignment: 'right'
        				}
        				]
        			},
        			{
        				columns: [
        				{
        					text: 'ABS (4-Wheel)'
        				},
        				{
        					text: 'Included',
        					alignment: 'right'
        				}
        				]
        			},
        			{
        				columns: [
        				{
        					text: 'Keyless Entry'
        				},
        				{
        					text: 'Included',
        					alignment: 'right'
        				}
        				]
        			},
        			{
        				columns: [
        				{
        					text: 'Air Conditioning'
        				},
        				{
        					text: 'Included',
        					alignment: 'right'
        				}
        				]
        			},
        			{
        				columns: [
        				{
        					text: 'Power Windows'
        				},
        				{
        					text: 'Included',
        					alignment: 'right'
        				}
        				]
        			},
        			{
        				columns: [
        				{
        					text: 'Power Door Locks'
        				},
        				{
        					text: 'Included',
        					alignment: 'right'
        				}
        				]
        			},
        			{
        				columns: [
        				{
        					text: 'Cruise Control'
        				},
        				{
        					text: 'Included',
        					alignment: 'right'
        				}
        				]
        			},
        			{
        				columns: [
        				{
        					text: 'Power Steering'
        				},
        				{
        					text: 'Included',
        					alignment: 'right'
        				}
        				]
        			},
        			{
        				columns: [
        				{
        					text: 'Power Door Locks'
        				},
        				{
        					text: 'Included',
        					alignment: 'right'
        				}
        				]
        			},
        			{
        				columns: [
        				{
        					text: 'Cruise Control'
        				},
        				{
        					text: 'Included',
        					alignment: 'right'
        				}
        				]
        			},
        			{
        				columns: [
        				{
        					text: 'Power Steering'
        				},
        				{
        					text: 'Included',
        					alignment: 'right'
        				}
        				]
        			},
        			{
        				columns: [
        				{
        					text: 'Cruise Control'
        				},
        				{
        					text: 'Included',
        					alignment: 'right'
        				}
        				]
        			},

        			]  
        		},
        		
        		{
        			type: 'none',
        			style: 'padded',
        			stack: [
        			{
        				columns: [
        				{
        					text: 'Tilt & Telescoping Wheel'
        				},
        				{
        					text: 'Included',
        					alignment: 'right'
        				}
        				]

        			},
        			{
        				columns: [
        				{
        					text: 'AM/FM Stereo'
        				},
        				{
        					text: 'Included',
        					alignment: 'right'
        				}
        				]

        			},
        			{
        				columns: [
        				{
        					text: 'CD/MP3 (Single Disc)'
        				},
        				{
        					text: 'Included',
        					alignment: 'right'

        				}

        				]
        			},
        			{
        				columns: [
        				{
        					text: 'SiriusXM Satellite'
        				},
        				{
        					text: 'Included',
        					alignment: 'right'

        				}

        				]
        			},
        			{
        				columns: [
        				{
        					text: 'Bluetooth Wireless'
        				},
        				{
        					text: 'Included',
        					alignment: 'right'

        				}

        				]
        			},
        			{
        				columns: [
        				{
        					text: 'Backup Camera'
        				},
        				{
        					text: '140/177',
        					alignment: 'right'

        				}

        				]
        			},
        			{
        				columns: [
        				{
        					text: 'Dual Air Bags'
        				},
        				{
        					text: 'Included',
        					alignment: 'right'

        				}

        				]
        			},
        			{
        				columns: [
        				{
        					text: 'Side Air Bags'
        				},
        				{
        					text: 'Included',
        					alignment: 'right'

        				}

        				]
        			},
        			{
        				columns: [
        				{
        					text: 'F&R Head Curtain Air Bags'
        				},
        				{
        					text: 'Included',
        					alignment: 'right'

        				}

        				]
        			},
        			{
        				columns: [
        				{
        					text: 'Steel Wheels'
        				},
        				{
        					text: 'Included',
        					alignment: 'right'

        				}

        				]
        			},
        			{
        				columns: [
        				{
        					text: 'Dual Air Bags'
        				},
        				{
        					text: 'Included',
        					alignment: 'right'

        				}

        				]
        			},
        			{
        				columns: [
        				{
        					text: 'Side Air Bags'
        				},
        				{
        					text: 'Included',
        					alignment: 'right'

        				}

        				]
        			},
        			{
        				columns: [
        				{
        					text: 'F&R Head Curtain Air Bags'
        				},
        				{
        					text: 'Included',
        					alignment: 'right'

        				}

        				]
        			},
        			{
        				columns: [
        				{
        					text: 'Steel Wheels'
        				},
        				{
        					text: 'Included',
        					alignment: 'right'

        				}
        				]
        			},
        			]  
        		}
        		]
        	},

        	{
        		style: 'paddedSide',
        		columns: [
        		{
        			text: '\n Total Value without mileage'
        		},
        		{
        			text: '\n $14,884/$17,656',
        			alignment: 'right'

        		}
        		]
        	},

        	{
        		style: 'paddedSide',
        		columns: [
        		{
        			text: 'Mileage Adjustment(16,865 miles)'
        		},
        		{
        			text: '($298)',
        			alignment: 'right'

        		}
        		]
        	},

        	{
        		style: 'paddedSide',
        		columns: [
        		{
        			text: '***Total Wholesale Lending/Retail Value'
        		},
        		{
        			text: '$14,586/$17,358',
        			alignment: 'right',
        			bold: true

        		}
        		]
        	},

        	{
        		text: '\n\n Kelley Blue Book® KARPOWER Online\'s® values for .Values are subjective opinions. Kelley Blue Book assumes no liability for errors \n oromissions as to values, manufacturer or dealer information.©Copyright Kelley Blue Book 2015. All rights reserved.\n\n\n\n\n\n',
        		style: 'textXS',
        		alignment: 'center'
        	},

        	
        	]
        },
        
        
        ]
        ]
      },
      layout: {
      	hLineWidth: function (i, node) {
      		return (i === 0 || i === node.table.body.length) ? 1 : 1;
      	},
      	vLineWidth: function (i, node) {
      		return (i === 0 || i === node.table.widths.length) ? 1 : 1;
      	},
      	hLineColor: function (i, node) {
      		return (i === 0 || i === node.table.body.length) ? 'gray' : 'gray';
      	},
      	vLineColor: function (i, node) {
      		return (i === 0 || i === node.table.widths.length) ? 'gray' : 'gray';
      	},
        // hLineStyle: function (i, node) { return {dash: { length: 10, space: 4 }}; },
        // vLineStyle: function (i, node) { return {dash: { length: 10, space: 4 }}; },
        // paddingLeft: function(i, node) { return 4; },
        // paddingRight: function(i, node) { return 4; },
        // paddingTop: function(i, node) { return 2; },
        // paddingBottom: function(i, node) { return 2; },
        // fillColor: function (rowIndex, node, columnIndex) { return null; }
      }
    },







    {
    	style: 'tableExample',
    	pageBreak: 'before',
    	table: {
    		headerRows: 1,
        // dontBreakRows: true,
        // keepWithHeaderRows: 1,
        widths: ['100%'],
        body: [
        [{text: 'Disclosures', style: 'tableHeader'}],
        [
        {
        	stack: [        	        	
        	
        	{
        		columns: [
        		{
        			type: 'none',
        			style: 'padded',
        			stack: [
        			
        			{
        				columns: [
        				{
        					text: 'Description',
        					bold: true,
        				},
        				]
        			},

        			{
        				columns: [
        				{
        					text: 'Franchise Frontline'
        				},
        				]
        			},
        			{
        				columns: [
        				{
        					text: 'Certified'
        				},
        				]
        			},

        			{
        				columns: [
        				{
        					text: 'Clean CARFAX'
        				},
        				]
        			},

        			{
        				columns: [
        				{
        					text: '\n Structural, Mechanical, Electrical',
        					bold: true,
        				},
        				]
        			},

        			{
        				columns: [
        				{
        					text: 'Frame Damage',
        					style: 'discHeader'
        				},
        				]
        			},

        			{
        				columns: [
        				{
        					text: 'No'
        				},
        				]
        			},



        			{
        				columns: [
        				{
        					text: '\n Exterior',
        					bold: true,
        				},
        				]
        			},

        			{
        				columns: [
        				{
        					text: 'Exterior Damage',
        					style: 'discHeader'
        				},
        				]
        			},

        			{
        				stack: [
        				{
        					columns: [
        					{
        						text: 'Quarter Panel - Left'
        					},
        					{
        						text: 'Scratch Heavy'
        					},
        					{
        						text: '2" to 3"'
        					}
        					]
        				},
        				{
        					columns: [
        					{
        						text: 'Hood'
        					},
        					{
        						text: 'Scratch Heavy'
        					},
        					{
        						text: 'Multiple'
        					}
        					]
        				},
        				{
        					columns: [
        					{
        						text: 'Rear Door Right'
        					},
        					{
        						text: 'Scratch Heavy'
        					},
        					{
        						text: 'Multiple'
        					}
        					]
        				},
        				{
        					columns: [
        					{
        						text: 'Deck Lid'
        					},
        					{
        						text: 'Scratch Heavy'
        					},
        					{
        						text: '4" to 5"'
        					}
        					]
        				}
        				]//stack ext damage
        			},

        			{
        				columns: [
        				{
        					text: 'Paintwork',
        					style: 'discHeader'
        				},
        				]
        			},

        			{
        				stack: [
        				{
        					columns: [
        					{
        						text: 'Quarter Panel - Right'
        					},
        					{
        						text: 'Substandard - Fish Eye'
        					},
        					{
        						text: 'Light'
        					}
        					]
        				},
        				{
        					columns: [
        					{
        						text: 'Rear Door - Right'
        					},
        					{
        						text: 'Bolts turned'
        					},
        					{
        						text: 'Light'
        					}
        					]
        				}
        				]//stack paintwork
        			},


        			{
        				columns: [
        				{
        					text: 'Tire',
        					style: 'discHeader'
        				},
        				]
        			},

        			{
        				stack: [
        				{
        					columns: [
        					{
        						text: 'Tires Good 5/32" or >'
        					},
        					{
        						text: 'Yes'
        					}
        					]
        				},
        				{
        					columns: [
        					{
        						text: 'All tires match (brand and size)?'
        					},
        					{
        						text: 'Yes'
        					}
        					
        					]
        				}
        				]//stack tires
        			},





        			

        			]  
        		},
        		
        		{
        			type: 'none',
        			style: 'padded',
        			stack: [
        			{
        				columns: [
        				{
        					text: 'Interior',
        					bold: true,
        				},
        				]
        			},

        			{
        				columns: [
        				{
        					text: 'Interior Damage',
        					style: 'discHeader'
        				},
        				]
        			},

        			{
        				stack: [
        				{
        					columns: [
        					{
        						text: 'None'
        					},
        					
        					]
        				},
        				
        				]//stack int damage
        			},


        			{
        				columns: [
        				{
        					text: 'Odor',
        					style: 'discHeader'
        				},
        				]
        			},

        			{
        				stack: [
        				{
        					columns: [
        					{
        						text: 'None'
        					},
        					
        					]
        				},
        				
        				]//stack odor
        			},


        			{
        				columns: [
        				{
        					text: 'Keys',
        					style: 'discHeader'
        				},
        				]
        			},

        			{
        				stack: [
        				{
        					columns: [
        					{
        						text: 'Keyless'
        					},
        					{
        						text: '2'
        					},
        					{
        						text: 'Good'
        					}
        					
        					]
        				},
        				
        				]//stack Keys
        			},


        			{
        				columns: [
        				{
        					text: 'Manuals',
        					style: 'discHeader'
        				},
        				]
        			},

        			{
        				stack: [
        				{
        					columns: [
        					{
        						text: 'No'
        					}
        					
        					]
        				},
        				
        				]//stack Manurals
        			},

        			{
        				columns: [
        				{
        					text: '\n Aftermarket',
        					bold: true,
        				},
        				]
        			},

        			{
        				columns: [
        				{
        					text: 'Aftermarket Items',
        					style: 'discHeader'
        				},
        				]
        			},
        			{
        				stack: [
        				{
        					columns: [
        					{
        						text: 'Exhaust'
        					},
        					]
        				},
        				{
        					columns: [
        					{
        						text: 'Brake Controller'
        					},
        					]
        				},
        				{
        					columns: [
        					{
        						text: 'Amp/Sub Woofer'
        					},
        					]
        				},
        				]//stack int damage
        			},


        			{
        				columns: [
        				{
        					text: '\n Other Comments',
        					bold: true,
        				},
        				]
        			},

        			{
        				stack: [
        				{
        					columns: [
        					{
        						text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        					},
        					]
        				},
        				{
        					columns: [
        					{
        						text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        					},
        					]
        				},
        				{
        					columns: [
        					{
        						text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        					},
        					]
        				},
        				]//stack int damage
        			},


        			
        			




        			
        			]  
        		}
        		]
        	},

        	

        	
        	]
        },
        
        
        ]
        ]
      },
      layout: {
      	hLineWidth: function (i, node) {
      		return (i === 0 || i === node.table.body.length) ? 1 : 1;
      	},
      	vLineWidth: function (i, node) {
      		return (i === 0 || i === node.table.widths.length) ? 1 : 1;
      	},
      	hLineColor: function (i, node) {
      		return (i === 0 || i === node.table.body.length) ? 'gray' : 'gray';
      	},
      	vLineColor: function (i, node) {
      		return (i === 0 || i === node.table.widths.length) ? 'gray' : 'gray';
      	},
        // hLineStyle: function (i, node) { return {dash: { length: 10, space: 4 }}; },
        // vLineStyle: function (i, node) { return {dash: { length: 10, space: 4 }}; },
        // paddingLeft: function(i, node) { return 4; },
        // paddingRight: function(i, node) { return 4; },
        // paddingTop: function(i, node) { return 2; },
        // paddingBottom: function(i, node) { return 2; },
        // fillColor: function (rowIndex, node, columnIndex) { return null; }
      }
    },

    

    
    ],

    styles: {
    	header: {
    		fontSize: 16,
    		bold: true,
    		margin: [0, 0, 0, 10]
    	},
    	subheader: {
    		fontSize: 13,
    		bold: true,
    		margin: [0, 10, 0, 5]
    	},
    	tableExample: {
    		margin: [0, 5, 0, 15],
    	},
    	tableHeader: {
    		bold: true,
    		fontSize: 12,
    		color: 'black',
    	},
    	listStyle: {
    		margin: [-5, 10, 10, 10]
    	},
    	textSM: {
    		fontSize: 10
    	},
    	textXS: {
    		fontSize: 8
    	},
    	totalPrice: {
    		fontSize: 16,
    		bold: true,
    		color: 'green'
    	},
    	textDanger: {
    		fontSize: 10,
    		color: '#a94442',
    		bold: true
    	},
    	padded: {
    		margin: [5, 10, 5, 10],
    	},
    	paddedSide: {
    		margin: [10, 0, 10, 0],
    	},
    	bold: {
    		bold: true
    	},
    	discHeader: {
    		bold: true,
    		margin: [0, 10, 0, 5],
    		color: 'grey',
    		italics: true
    	},
    	branding: {
    	    fontSize: 25,
    	    alignment: 'left',
    	    color: '#3B356E',
    	    bold: true
    	}

    },
    defaultStyle: {
    	fontSize: 10,
    // alignment: 'justify'
  }
  
}