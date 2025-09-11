class Lms:
    Uni_name = "LPU"
    Location = "Phagwara"
    estd = "2004"


    def __init__(self):
        self.name = "name"
        self.Uid = "Uid"
        self.Course = "Course" 
        self.email = "email"

    def id(self):
        print(f"Name: {self.name}")
        print(f"Uid: {self.Uid}")
        print(f"Course: {self.Course}")
        print(f"Email: {self.email}")
        print(f"University Name: {self.Uni_name}")

class Parent:
    def __init__(self):
        self.FatherName = 'f'
        self.MotherName = 'm'

    def ParentDetails(self):
        print(f"Father's Name: {self.FatherName}")
        print(f"Mother's Name: {self.MotherName}")

class marks(Lms, Parent):
    def __init__(self):
        Lms.__init__(self)
        Parent.__init__(self)
        self.marks1 = "m1"
        self.marks2 = "m2"
        self.marks3 = "m3"
    
    def ReportCard(self):
        Lms.id(self)
        print(f"Marks1: {self.marks1}")
        print(f"Marks2: {self.marks2}")
        print(f"Marks3: {self.marks3}")
        print(f"Total Marks: {int(self.marks1) + int(self.marks2) + int(self.marks3)}")
        print(f"Percentage: {(int(self.marks1) + int(self.marks2) + int(self.marks3))/3}%")
        Parent.ParentDetails(self)


st1 = marks()
st1.name = "Aman"
st1.Uid = "LPU12345"
st1.Course = "B.Tech CSE"
st1.email = "abc@abc"
st1.marks1 = 85
st1.marks2 = 90
st1.marks3 = 95
st1.FatherName = "Raj"
st1.MotherName = "Simran"

st1.ReportCard()

