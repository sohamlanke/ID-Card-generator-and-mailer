import requests
r = requests.post("https://docs.google.com/forms/d/e/1FAIpQLSdsDdSUnQbO6fNZ0riQxXmSi3xb8tkVXQsCmJJx1-KIHPS_cg/formResponse",
                  data={"entry.630789195": "test email from python"})
print(r)