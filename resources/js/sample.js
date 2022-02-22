const xlsx = require('./oita.xlsx')
let workbook =xlsx.readFile('大分市保育施設.xlsx')

let sheetNames =workbook.sheetNames
let Sheet1 =workbook.Sheets[sheetNames[0]]
let Sheet1_json =xlsx.utils.sheet_to_json(Sheet1)

console.log(`シート1の全ての値:`)
for(let cl of Sheet1_json){
  console.log(`${cl['A1の内容']} - ${cl['B1の内容']} - ${cl['C1の内容']}`)
}