// $('form').submit(function(){
    $('form').change(function(){
        //Find what to validate
        // let bErrors = false
        $(this).find('input[data-validate=yes]').each( function(){
    
            $(this).removeClass('invalid')
            let sDataType = $(this).attr('data-type')
            let iMin = $(this).attr('data-min')
            let iMax = $(this).attr('data-max')
            switch(sDataType){
                case "string":
                    if( $(this).val().length < iMin || 
                        $(this).val().length > iMax ){
                            $(this).addClass('invalid')
                            // bErrors = true
                    }
                break
                
                case "integer":
                    if( Number($(this).val()) < iMin || 
                        Number($(this).val()) > iMax ){
                          $(this).addClass('invalid')
                        //   bErrors = true
                    }
                break
                case "email":
                    //make it validate emails
                    function validateEmail(email) {
                        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                        return re.test(String(email).toLowerCase());
                    }
                    if( Number($(this).val().length) < iMin || 
                        Number($(this).val().length) > iMax ||
                        !validateEmail($(this).val()) ){
                          $(this).addClass('invalid')
                        //   bErrors = true
                    }
                break
                default:
                    console.log('sorry do not know how to validate that')
                break
    
            }
        })
    
        // if(bErrors==false){
        //     return true
        // }
        //what to check for?
        if($(this).children().hasClass('invalid') ){return false}
    
        // return false
    
    })
    
    // })
    