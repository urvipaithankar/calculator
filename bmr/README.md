# BMR Calculator

#### **[Check out creator's details](https://urvipaithankar.github.io)**

---

# BMR Calculator API

---

## Calculate Body Mass Ratio (BMR) easily with this API. Read this documentation for detailed information.

---

### API usage : 
#### GET
```

https://urvipaithankar.herokuapp.com/bmr/index.php/height/weight/age/gender 

```

###### example

```

For male : https://urvipaithankar.herokuapp.com/bmi/index.php/159/56/20

For female : https://urvipaithankar.herokuapp.com/bmi/index.php/159/56/20/female

```

---

### Parameters:

```

height - should be specified in Centimeters (cms)
weight - should be specified in Kilograms (Kgs)
age - should be specified in years
gender (optional) - No gender implies MALE [Possible values : male and female]


```

-----

### Output format:

#### The output response will be in JSON format. Kindly check the structure below.


##### JSON format

```json	

"data":{
	"height" : height,
	"weight" : weight',
	"age" : age,
	"gender" : "gender",    
	"bmr" : bmr             
}

```

### NOTE

The unit of BMI is *calories/day*


---

## Error Codes

 **_ERROR NO._** | **_ERROR_** | **_DESCRIPTION_**
 
**001** | *ERROR001* | This error occues if there is a problem with the input data and/or parameters specified.

-----

[Visit the creator's site...](https://urvipaithankar.github.io)