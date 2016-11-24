(function (){
    "use strict";

    var timeUtil = {
        "time": "9:23 am",
        "minutesToAdd": 10,
        "minutes": "",
        "minutesArray": this.time.split(":", 2),
        "hours": "",
        "numberOfHoursProvided": parseInt(this.combinedMinutes / 60);
        "combinedMinutes": parseInt(this.minutes + minutesToAdd),
        "calculateHours": parseInt(this.hours),
        "getMinutes": minutesArray.forEach(timeUtil.setMinutes),
        "getHoursArray": function() {
            var timeArray = this.time.split("");
            timeArray.forEach(timeUtil.setHours);
        },
        "setMinutes": function (element, index, array) {
                return this.minutes += this.minutesArray.shift();
        },
        "setHours": function (element, index, array) {
            if (element !== ":") {
                return this.hours += this.shift();
            }
        },
        "checkIfMinutesExceedSixty": function (minutes, minutesToAdd) {
            if (this.combinedMinutes < 60) {
                return minutes = minutes + minutesToAdd;
            } else {
                calculateMinutesAddedInHours();
                return false;
            }

        },
        "setHoursAndMinutes": function(){
                if (this.numberOfHoursProvided < 0) {
                     this.hours += 1;
                     this.minutes = 0;
                } else {
                    this.hours += this.numberOfHoursProvided;
                    this.minutes = this.getOverFlow;
                }
        },
        "getOverflow": function() {
            return (this.combinedMinutes - (this.numberOfHoursProvided * 60))
        }
        // },
        // "getFormattedTime": function() {
        //     if (this.hours > 12)
        //     return 
        // }
    }
})();
