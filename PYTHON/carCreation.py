class Car:
    def __init__(self, name):
        self.name = name
        self.parts = []

    def CarParts(self, engine, paint, wheels, interior, safety):
        self.parts.append(engine)
        self.parts.append(paint)
        self.parts.append(wheels)
        self.parts.append(interior)
        self.parts.append(safety)

     