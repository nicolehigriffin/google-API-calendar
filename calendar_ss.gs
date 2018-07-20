function getEvents() {
  // create calendar or attain an already existing calendar // 
  
  var ss = SpreadsheetApp.getActiveSpreadsheet().getActiveSheet();
  var cal = CalendarApp.getCalendarById('')#email of the user is the id 
  var events = cal.getEvents(new Date("8/1/2018 12:00 AM"), new Date("8/30/2018 11:59 PM"))
  
  // clean spreadsheet before adding stuff //
  
  var lastRow = ss.getLastRow();
  ss.getRange(2,1,lr-1,5).clearContent();
  
  
  for(var i = 0; i < events.length; i++) { 
    var title = events[i].getTitle()
    var start = events[i].getStartTime()
    var end = events[i].getEndTime()
    var location = events[i].getLocation()
    var descrip = events[i].getDescription()
 
    ss.getRange(i+2,1).setValue(title)
    ss.getRange(i+2,2).setValue(start)
    ss.getRange(i+2,3).setValue(end)
    ss.getRange(i+2,4).setValue(location)
    ss.getRange(i+2,5).setValue(descrip)
       
  }
      
}

function addEvents() { 
  var ss = SpreadsheetApp.getActiveSpreadsheet().getActiveSheet();
  var lastRow = ss.getLastRow();
  var cal = CalendarApp.getCalendarById("nr1760@nyu.edu");
  
  var data = ss.getRange("A2:E" + lastRow).getValues();
  
  for(var i = 0; i<data.length; i++) {
    cal.createEvent(data[i][0], data[i][1], data[i][2], {location: data[i][3], description: data[i][4]});
  }
}
    
  
