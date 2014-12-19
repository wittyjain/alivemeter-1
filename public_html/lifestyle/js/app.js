$("#registered-btn").click(function(e){
   $("#registered-btn").css("display", "none");
   $("#register-now-btn").css("display", "none");
   $("#user-details").toggle();
})

$("#register-now-btn").click(function(e){
    window.open("lifestyle-assessment.php?company=Apps-Daily", "_self");
})

$("#get-user-details").click(function(e){
    e.preventDefault();
    $("#user-details").toggle();
    var userDetails = [];
    userDetails.push($("#profileId").val());
    userDetails.push($("#emailId").val());
    userDetails.push($("#mobile").val());
    $.ajax({ 
        type: "POST",
        url: 'lifestyle-assessment.php',
        data: (
            {userDetails: userDetails}
        ),
        datatype: "html",
        success: function(result)
        {
            $("#header").append(result);
        }
    })
})

$("#check-profile-id").click(function(e){
    e.preventDefault();
    var profileId = $("#profile-id").val();
    $.ajax({ 
        type: "POST",
        url: 'check-profile-id.php',
        data: (
            {profileId: profileId}
        ),
        datatype: "html",
        success: function(result)
        {
            alert(result);
        }
    })
})

$(".submit-button").click(function(e){
    e.preventDefault();
    var isRegistered;
    if($("#profile-id").prop('disabled')){
        isRegistered = true;
    }
    else{
        isRegistered = false;
    }
    var firstName = $("#first-name").val();
    var lastName = $("#last-name").val();
    var profileId = $("#profile-id").val();
    var gender = $("#gender").val();
    var dobDD = $("#element_3_2").val();
    var dobMM = $("#element_3_1").val();
    var dobYY = $("#element_3_3").val();
    var maritalStatus = $("#marital-status").val();
    var height = $("#height").val();
    var heightOption = $("#height-option").val();
    var weight = $("#weight").val();
    var mobile = $("#mobile").val();
    var emailId = $("#email-id").val();
    var pincode = $("#pincode").val();
    var earningMember = $("#earning-member").val();
    var profession = $("#profession").val();
    var company = $("#company").val();
    var bloodGroup = $("#blood-group").val();
    var landlineCountry = $("#landline-country").val();
    var landlineArea = $("#landline-area").val();
    var landlineNumber = $("#landline-number").val();
    var address1 = $("#address1").val();
    var address2 = $("#address2").val();
    var landmark = $("#landmark").val();
    var uid = $("#uid").val();
    var pan = $("#pan").val();
    var designation = $("#designation").val();
    var travelMode = $("#travel-mode").val();
    var travelTimeHour = $("#travel-time-hour").val();
    var travelTimeMin = $("#travel-time-min").val();
    var goalWeight = $("#goal-weight").val();
    var setGoal = $("#set-goal").val();
    var dailyActivities = $("#daily-activities").val();
    var workouts = $("#workouts").val();
    var minutesWorkout = $("#minutes-workout").val();
    var spirit = $("#spirit").val();
    var beer = $("#beer").val();
    var cigarette = $("#cigarette").val();
    var sleep = $("#sleep").val();
   
    var userFilledDetails = [];
    userFilledDetails.push(isRegistered);
    userFilledDetails.push(firstName);
    userFilledDetails.push(profileId);
    userFilledDetails.push(gender);
    userFilledDetails.push(dobDD);
    userFilledDetails.push(dobMM);
    userFilledDetails.push(dobYY);
    userFilledDetails.push(maritalStatus);
    userFilledDetails.push(height);
    userFilledDetails.push(heightOption);
    userFilledDetails.push(weight);
    userFilledDetails.push(mobile);
    userFilledDetails.push(emailId);
    userFilledDetails.push(pincode);
    userFilledDetails.push(earningMember);
    userFilledDetails.push(profession);
    userFilledDetails.push(company);
    userFilledDetails.push(bloodGroup);
    userFilledDetails.push(landlineCountry);
    userFilledDetails.push(landlineArea);
    userFilledDetails.push(landlineNumber);
    userFilledDetails.push(address1);
    userFilledDetails.push(address2);
    userFilledDetails.push(landmark);
    userFilledDetails.push(uid);
    userFilledDetails.push(pan);
    userFilledDetails.push(designation);
    userFilledDetails.push(travelMode);
    userFilledDetails.push(travelTimeHour);
    userFilledDetails.push(travelTimeMin);
    userFilledDetails.push(lastName);
    userFilledDetails.push(goalWeight);
    userFilledDetails.push(setGoal);
    userFilledDetails.push(dailyActivities);
    userFilledDetails.push(workouts);
    userFilledDetails.push(minutesWorkout);
    userFilledDetails.push(spirit);
    userFilledDetails.push(beer);
    userFilledDetails.push(cigarette);
    userFilledDetails.push(sleep);

    $.ajax({ 
        type: "POST",
        url: 'createAccount.php',
        data: (
            {userFilledDetails : userFilledDetails,
            }
        ),
        datatype: "json",
        success: function(result)
        {
            resultArray = eval(result);
            var alertString = "";
            var i=0;
            if(resultArray.length >0){
                if(resultArray[0]=="Unfilled"){
                    alertString = "You have not filled :";
                    for(i=1; i<resultArray.length-1; i++){
                        alertString += " "+resultArray[i]+",";
                    }
                    alertString += " "+resultArray[i];
                    alert(alertString);
		}
                else if (resultArray[0]=="Matched"){
                    for(i=1; i<resultArray.length-1; i++){
                        alertString += resultArray[i]+", ";
                    }
                    alertString += resultArray[i];
                    alertString += " already in use!"
                    alert(alertString);
                }
                else
                {
                    alert("Thank you for filling in the details. Post uploading your blood test reports we will email your login credentials to you in one week. Until then stay connected with us on our social handles.")
                    location.href = "../";
                }
            }                  
        }
    })
})
