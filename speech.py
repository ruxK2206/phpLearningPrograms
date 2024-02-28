def speech_repeater():
    while True:
        user_input = input("Please say something: ")
        if user_input.lower() == "exit":
            print("Exiting speech repeater...")
            break
        else:
            print("You said:", user_input)

if __name__ == "__main__":
    speech_repeater()
